<?php

/**
 * Copyright (c) 2012 Romain Neutron
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 */

namespace PHPExiftool;

use \Symfony\Component\Process\Process;

/**
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class Exiftool
{

  /**
   * For use with list option
   */

  const LISTTYPE_WRITABLE          = 'w';
  /**
   * For use with list option
   */
  const LISTTYPE_SUPPORTED_FILEEXT = 'f';
  /**
   * For use with list option
   */
  const LISTTYPE_WRITABLE_FILEEXT  = 'wf';
  /**
   * For use with list option
   */
  const LISTTYPE_SUPPORTED_XML     = 'x';
  /**
   * For use with list option
   */
  const LISTTYPE_DELETABLE_GROUPS  = 'd';
  /**
   * For use with list option
   */
  const LISTTYPE_GROUPS            = 'g';


  /**
   * Read the metadatas in the file
   *
   * @param \SplFileInfo $file
   * @return \Driver\Metadata\MetadataBag
   */
  public function read(\SplFileInfo $file)
  {
    $XML = static::executeCommand(self::getBinary() . ' -X ' . escapeshellarg($file->getPathname()));

    $dom = new \DOMDocument;
    $dom->loadXML($XML);

    $DomXpath = new \DOMXPath($dom);
    $DomXpath->registerNamespace('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');

    foreach (static::getNamespacesFromXml($XML) as $prefix => $uri)
    {
      $DomXpath->registerNamespace($prefix, $uri);
    }

    $nodes = $DomXpath->query('/rdf:RDF/rdf:Description/*');

    $metadatas = new Driver\Metadata\MetadataBag();

    foreach ($nodes as $node)
    {
      $tagname = $node->nodeName;

      if (strpos($tagname, 'CIFF:') === 0)
      {
        /** We bypass datas we can have with SplFileInfo * */
        foreach (array('Canon', 'CanonRaw') as $substit)
        {
          try
          {
            Driver\TagFactory::getFromRDFTagname(str_replace('CIFF:', $substit . ':', $tagname));
            $tagname = str_replace('CIFF:', $substit . ':', $tagname);

            break;
          }
          catch (Exception\TagUnknown $e)
          {

          }
        }
      }

      try
      {
        $tag = Driver\TagFactory::getFromRDFTagname($tagname);
      }
      catch (Exception\TagUnknown $e)
      {
        continue;
      }

      $metaValue = self::getValueFromXMLNode($tag, $node);

      $metadata = new Driver\Metadata\Metadata($tag, $metaValue, $file);

      $metadatas->set($tagname, $metadata);
    }

    return $metadatas;
  }
  
  /**
   * Return the result of a Exiftool -list* command
   *
   * @param type $type
   * @return type
   * @throws \Exception
   */
  public static function listDatas($type = self::LISTTYPE_SUPPORTED_XML)
  {
    $available = array(
      self::LISTTYPE_WRITABLE, self::LISTTYPE_SUPPORTED_FILEEXT
      , self::LISTTYPE_WRITABLE_FILEEXT, self::LISTTYPE_SUPPORTED_XML
      , self::LISTTYPE_DELETABLE_GROUPS, self::LISTTYPE_GROUPS,
    );

    if (!in_array($type, $available))
      throw new \Exception('Unknown list attribute');

    return static::executeCommand(self::getBinary() . ' -f -list' . $type);
  }

  /**
   * Extract all XML namespaces declared in a XML
   *
   * @param type $XML
   * @return array
   */
  public static function getNamespacesFromXml($XML)
  {
    $namespaces = array();

    $dom = new \DOMDocument;

    if ($dom->loadXML($XML))
    {
      $pattern = "(xmlns:([a-zA-Z-_0-9]+)=[']{1}(https?:[/{2,4}|\\{2,4}][\w:#%/;$()~_?/\-=\\\.&]*)[']{1})";

      preg_match_all($pattern, $XML, $matches, PREG_PATTERN_ORDER, 0);

      foreach ($matches[2] as $key => $value)
      {
        $namespaces[$matches[1][$key]] = $value;
      }
    }

    unset($dom);

    return $namespaces;
  }

  /**
   *
   * @param Driver\Tag $tag
   * @param \DOMNode $node
   * @return null|string|PHPExiftool\Driver\Metadata\MultiBag
   */
  private static function getValueFromXMLNode(Driver\Tag $tag, \DOMNode $node)
  {

    $metaValue = null;

    if ($tag->isBinary())
    {
      return null;
    }

    if ($tag->isMulti())
    {
      $metaValue = new Driver\Metadata\MultiBag();

      $bag_elements = $node->getElementsByTagNameNS(
        'http://www.w3.org/1999/02/22-rdf-syntax-ns#'
        , 'li'
      );

      foreach ($bag_elements as $nodeElement)
      {
        $metaValue->add($nodeElement->nodeValue);
      }
    }
    else
    {

      switch ($node->getAttribute('rdf:datatype'))
      {
        case 'http://www.w3.org/2001/XMLSchema#base64Binary':
          $metaValue = base64_decode($node->nodeValue);
          break;
        case '';
        default:
          $metaValue = $node->nodeValue;
          break;
      }
    }

    return $metaValue;
  }

  /**
   *
   * @param string $command
   * @return string
   * @throws \Exception
   */
  private static function executeCommand($command)
  {
    $process = new Process($command);
    $process->run();

    if (!$process->isSuccessful())
    {
      throw new \Exception('Unable to run the command');
    }

    return $process->getOutput();
  }

  /**
   *
   * @return string
   */
  private static function getBinary()
  {
    return realpath(__DIR__ . '/../../lib/vendor/Exiftool/exiftool');
  }

}