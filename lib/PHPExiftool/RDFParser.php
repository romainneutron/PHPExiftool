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
class RDFParser
{

    /**
     * RDF Namespace
     */

    const RDF_NAMESPACE = 'http://www.w3.org/1999/02/22-rdf-syntax-ns#';

    /**
     * Parse a XML string and returns an ArrayCollection of FileEntity
     *
     * @param string $XML
     * @return \Doctrine\Common\Collections\ArrayCollection
     * @throws Exception\ParseError
     */
    public static function Parse($XML)
    {
        $DOM = new \DOMDocument;

        if ( ! $DOM->loadXML($XML))
        {
            throw new Exception\ParseError('Unable to load XML');
        }

        /**
         * A default Exiftool XML can contains many RDF Descriptions
         */

        return static::SplitRDFsInEntities($DOM);
    }

    /**
     * Parse an Entity associated DOM, returns the metadatas
     *
     * @param FileEntity $Entity
     * @return \Driver\Metadata\MetadataBag
     */
    public static function ParseEntity(FileEntity $Entity)
    {
        $DomXpath = new \DOMXPath($Entity->getDom());
        $DomXpath->registerNamespace('rdf', self::RDF_NAMESPACE);

        foreach (static::getNamespacesFromXml($Entity->getDom()) as $prefix => $uri)
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

            $metaValue = self::preloadTagValue($tag, $node);

            $metadata = new Driver\Metadata\Metadata($tag, $metaValue, $Entity->getFile());

            $metadatas->set($tagname, $metadata);
        }

        return $metadatas;
    }

    /**
     * Returns the first result for a user defined query against the RDF
     *
     * @param FileEntity $Entity
     * @param string $query
     * @return string
     */
    public static function QueryEntity(FileEntity $Entity, $query)
    {
        $QueryParts = explode(':', $query);

        $registeredPrefix = false;

        $DomXpath = new \DOMXPath($Entity->getDom());
        $DomXpath->registerNamespace('rdf', self::RDF_NAMESPACE);

        foreach (static::getNamespacesFromXml($Entity->getDom()) as $prefix => $uri)
        {
            if ($prefix === $QueryParts[0])
            {
                $registeredPrefix = true;
            }

            $DomXpath->registerNamespace($prefix, $uri);
        }

        if ( ! $registeredPrefix)
        {
            return null;
        }

        $nodes = $DomXpath->query('/rdf:RDF/rdf:Description/' . $query);

        if ($nodes instanceof \DOMNodeList && $nodes->length > 0)
        {
            return $nodes->item(0)->nodeValue;
        }

        return null;
    }

    /**
     * Returns an ArrayCollection of Entities from a collection of Exiftool
     * RDF Descriptions
     *
     * @param \DOMDOcument $DomFiles
     * @return \Doctrine\Common\Collections\ArrayCollection
     * @throws Exception\ParseError
     */
    private static function SplitRDFsInEntities(\DOMDocument $DomFiles)
    {
        $DomXpath = new \DOMXPath($DomFiles);
        $DomXpath->registerNamespace('rdf', self::RDF_NAMESPACE);

        $Entities = new \Doctrine\Common\Collections\ArrayCollection();

        foreach ($DomXpath->query('/rdf:RDF/rdf:Description') as $node)
        {
            /**
             * Let's create a DOMDocument containing a single RDF result
             */
            $Dom = new \DOMDocument();

            $DomRootElement = $Dom->createElementNS(self::RDF_NAMESPACE, 'rdf:RDF');
            $DomRootElement->appendChild($Dom->importNode($node, true));

            $Dom->appendChild($DomRootElement);

            $LocalXpath = new \DOMXPath($Dom);
            $LocalXpath->registerNamespace('rdf', self::RDF_NAMESPACE);


            $RDFDescriptionRoot = $LocalXpath->query('/rdf:RDF/rdf:Description');

            /**
             * Let's associate a Description to the corresponding file
             */
            $file = new \SplFileInfo($RDFDescriptionRoot->item(0)->getAttribute('rdf:about'));

            $Entities->set($file->getFilename(), new FileEntity($file, $Dom));
        }

        return $Entities;
    }

    /**
     * Extract all XML namespaces declared in a XML
     *
     * @param type $XML
     * @return array
     */
    protected static function getNamespacesFromXml(\DOMDocument $dom)
    {
        $namespaces = array();

        $XML = $dom->saveXML();

        $pattern = "(xmlns:([a-zA-Z-_0-9]+)=['|\"]{1}(https?:[/{2,4}|\\{2,4}][\w:#%/;$()~_?/\-=\\\.&]*)['|\"]{1})";

        preg_match_all($pattern, $XML, $matches, PREG_PATTERN_ORDER, 0);

        foreach ($matches[2] as $key => $value)
        {
            $namespaces[$matches[1][$key]] = $value;
        }

        return $namespaces;
    }

    /**
     * Read the value corresponding to a Driver\Tag
     *
     * @param Driver\Tag $tag
     * @param \DOMNode $node
     * @return string|Driver\Metadata\MultiBag
     */
    private static function preloadTagValue(Driver\Tag $tag, \DOMNode $node)
    {
        $metaValue = null;

        if ($tag->isBinary())
        {
            return null;
        }

        if ($tag->isMulti())
        {
            $metaValue = new Driver\Metadata\MultiBag();

            $bag_elements = $node->getElementsByTagNameNS(self::RDF_NAMESPACE, 'li');

            foreach ($bag_elements as $nodeElement)
            {
                $metaValue->add(static::readNodeValue($nodeElement));
            }
        }
        else
        {
            $metaValue = static::readNodeValue($node);
        }

        return $metaValue;
    }

    /**
     * Read the node value, decode it if needed
     *
     * @param \DOMNode $node
     * @return mixed
     */
    private static function readNodeValue(\DOMNode $node)
    {
        switch ($node->getAttribute('rdf:datatype'))
        {
            case 'http://www.w3.org/2001/XMLSchema#base64Binary':
                return base64_decode($node->nodeValue);
                break;
            case '';
            default:
                return $node->nodeValue;
                break;
        }
    }

}
