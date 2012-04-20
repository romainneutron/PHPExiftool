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

    protected $XML;
    protected $DOM;
    protected $DOMXpath;
    protected $registeredPrefixes;
    protected $namespacesRedirection = array(
      'CIFF' => array('Canon', 'CanonRaw')
    );

    public function open($XML)
    {
        $this->close();

        $this->XML = $XML;

        return $this;
    }

    public function close()
    {
        $this->XML = null;
        $this->DOMXpath = null;
        $this->DOM = null;
        $this->registeredPrefixes = array();

        return $this;
    }

    /**
     * Parse a XML string and returns an ArrayCollection of FileEntity
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function ParseEntities()
    {
        /**
         * A default Exiftool XML can contains many RDF Descriptions
         */
        $Entities = new \Doctrine\Common\Collections\ArrayCollection();

        foreach ($this->getDomXpath()->query('/rdf:RDF/rdf:Description') as $node)
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

            $Entities->set($file->getFilename(), new FileEntity($file, $Dom, $this));
        }

        return $Entities;
    }

    /**
     * Parse an Entity associated DOM, returns the metadatas
     *
     * @return \Driver\Metadata\MetadataBag
     */
    public function ParseMetadatas()
    {
        $nodes = $this->getDomXpath()->query('/rdf:RDF/rdf:Description/*');

        $metadatas = new Driver\Metadata\MetadataBag();

        foreach ($nodes as $node)
        {
            $tagname = $this->normalize($node->nodeName);

            try
            {
                $tag = Driver\TagFactory::getFromRDFTagname($tagname);
            }
            catch (Exception\TagUnknown $e)
            {
                continue;
            }

            $metaValue = $this->readNodeValue($node, $tag);

            $metadata = new Driver\Metadata\Metadata($tag, $metaValue);

            $metadatas->set($tagname, $metadata);
        }

        return $metadatas;
    }

    /**
     * Returns the first result for a user defined query against the RDF
     *
     * @param string $query
     * @return string
     */
    public function Query($query)
    {
        $QueryParts = explode(':', $query);

        $DomXpath = $this->getDomXpath();

        if ( ! in_array($QueryParts[0], $this->registeredPrefixes))
        {
            return null;
        }

        $nodes = $DomXpath->query('/rdf:RDF/rdf:Description/' . $query);

        if ($nodes instanceof \DOMNodeList && $nodes->length > 0)
        {
            return $this->readNodeValue($nodes->item(0));
        }

        return null;
    }

    protected function normalize($tagname)
    {
        foreach ($this->namespacesRedirection as $from => $to)
        {
            if (strpos($tagname, $from . ':') !== 0)
            {
                continue;
            }

            foreach ((array) $to as $substit)
            {
                $supposedTagname = str_replace($from . ':', $substit . ':', $tagname);

                if (Driver\TagFactory::hasFromRDFTagname($supposedTagname))
                {
                    return $supposedTagname;

                    break;
                }
            }
        }

        return $tagname;
    }

    /**
     * Extract all XML namespaces declared in a XML
     *
     * @param \DOMDocument $dom
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
     * Read the node value, decode it if needed
     *
     * @param \DOMNode $node
     * @return \PHPExiftool\Driver\Value\Value
     */
    protected function readNodeValue(\DOMNode $node, Driver\Tag $tag = null)
    {
        switch (true)
        {
            case $node->getElementsByTagNameNS(self::RDF_NAMESPACE, 'Bag')->length > 0:

                $bag_elements = $node->getElementsByTagNameNS(self::RDF_NAMESPACE, 'li');
                $ret          = new \PHPExiftool\Driver\Value\Multi();
                foreach ($bag_elements as $nodeElement)
                {
                    $ret->addValue($nodeElement->nodeValue);
                }

                return $ret;
                break;
            case $node->getAttribute('rdf:datatype') === 'http://www.w3.org/2001/XMLSchema#base64Binary':
                if (is_null($tag))
                {
                    try
                    {
                        $tag = \PHPExiftool\Driver\TagFactory::getFromRDFTagname($this->normalize($node->nodeName));
                    }
                    catch (\PHPExiftool\Exception\TagUnknown $e)
                    {

                    }
                }
                if (is_null($tag) || $tag->isBinary())
                {
                    return \PHPExiftool\Driver\Value\Binary::loadFromBase64($node->nodeValue);
                }
                else
                {
                    return new \PHPExiftool\Driver\Value\Mono(base64_decode($node->nodeValue));
                }
                break;
            default:
                return new \PHPExiftool\Driver\Value\Mono($node->nodeValue);
                break;
        }
    }

    protected function getDom()
    {
        if ( ! $this->XML)
        {
            throw new \PHPExiftool\Exception\LogicException('You must open an XML first');
        }

        if ( ! $this->DOM)
        {

            $this->DOM = new \DOMDocument;

            /**
             * We shut up the warning to exclude an exception in case Warnings are
             * transformed in exception
             */
            if ( ! @$this->DOM->loadXML($this->XML))
            {
                throw new Exception\ParseError('Unable to load XML');
            }
        }

        return $this->DOM;
    }

    protected function getDomXpath()
    {
        if ( ! $this->DOMXpath)
        {
            $this->DOMXpath = new \DOMXPath($this->getDom());

            $this->DOMXpath->registerNamespace('rdf', self::RDF_NAMESPACE);

            foreach (static::getNamespacesFromXml($this->getDom()) as $prefix => $uri)
            {
                $this->registeredPrefixes = array_merge($this->registeredPrefixes, (array) $prefix);
                $this->DOMXpath->registerNamespace($prefix, $uri);
            }
        }

        return $this->DOMXpath;
    }

}
