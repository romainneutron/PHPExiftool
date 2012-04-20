<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool;

use \Doctrine\Common\Collections\ArrayCollection;

/**
 * Exiftool RDF output Parser
 *
 * @author      Romain Neutron <imprec@gmail.com>
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

    /**
     * Opens an XML file for parsing
     *
     * @param string $XML
     * @return \PHPExiftool\RDFParser
     */
    public function open($XML)
    {
        $this->close();

        $this->XML = $XML;

        return $this;
    }

    /**
     * Close the current opened XML file and reset internals
     *
     * @return \PHPExiftool\RDFParser
     */
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
        $Entities = new ArrayCollection();

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
     * @return \PHPExiftool\Driver\Value\Value  The value
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

    /**
     * Normalize a tagname based on namespaces redirections
     *
     * @param string    $tagname    The tagname to normalize
     * @return string               The normalized tagname
     */
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
     * @return array            The namespaces declared in XML
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
     * @param   \DOMNode            $node   The node to read
     * @param   Driver\Tag          $tag    The tag associated
     * @return  Driver\Value\Value          The value extracted
     */
    protected function readNodeValue(\DOMNode $node, Driver\Tag $tag = null)
    {
        $nodeName = $this->normalize($node->nodeName);

        if (is_null($tag) && Driver\TagFactory::hasFromRDFTagname($nodeName))
        {
            $tag = Driver\TagFactory::getFromRDFTagname($nodeName);
        }

        if ($node->getElementsByTagNameNS(self::RDF_NAMESPACE, 'Bag')->length > 0)
        {
            $ret = array();

            foreach ($node->getElementsByTagNameNS(self::RDF_NAMESPACE, 'li') as $nodeElement)
            {
                $ret[] = $nodeElement->nodeValue;
            }

            if (is_null($tag) || $tag->isMulti())
            {
                return new Driver\Value\Multi($ret);
            }
            else
            {
                return new Driver\Value\Mono(implode(' ', $ret));
            }
        }
        elseif ($node->getAttribute('rdf:datatype') === 'http://www.w3.org/2001/XMLSchema#base64Binary')
        {
            if (is_null($tag) || $tag->isBinary())
            {
                return Driver\Value\Binary::loadFromBase64($node->nodeValue);
            }
            else
            {
                return new Driver\Value\Mono(base64_decode($node->nodeValue));
            }
        }
        else
        {
            if ( ! is_null($tag) && $tag->isMulti())
            {
                return new Driver\Value\Multi($node->nodeValue);
            }
            else
            {
                return new Driver\Value\Mono($node->nodeValue);
            }
        }
    }

    /**
     * Compute the DOMDocument from the XML
     *
     * @return \DOMDocument
     * @throws Exception\LogicException
     * @throws Exception\ParseError
     */
    protected function getDom()
    {
        if ( ! $this->XML)
        {
            throw new Exception\LogicException('You must open an XML first');
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

    /**
     * Compute the DOMXpath from the DOMDocument
     *
     * @return \DOMXpath                    The DOMXpath object related to the XML
     * @throws Exception\RuntimeException
     */
    protected function getDomXpath()
    {
        if ( ! $this->DOMXpath)
        {
            try
            {
                $this->DOMXpath = new \DOMXPath($this->getDom());
            }
            catch (Exception\ParseError $e)
            {
                throw new Exception\RuntimeException('Unable to parse the XML');
            }

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
