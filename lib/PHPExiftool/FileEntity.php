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

/**
 *
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class FileEntity implements \IteratorAggregate
{

    /**
     *
     * @var \DOMDocument
     */
    private $dom;

    /**
     *
     * @var \SplFileInfo
     */
    private $file;

    /**
     *
     * @var \Doctrine\Common\Cache\ArrayCache
     */
    private $cache;

    /**
     *
     * @var \PHPExiftool\RDFParser
     */
    private $parser;

    /**
     * Construct a new FileEntity
     *
     * @param \SplFileInfo $file
     * @param \DOMDocument $dom
     * @return \PHPExiftool\FileEntity
     */
    public function __construct(\SplFileInfo $file, \DOMDocument $dom, \PHPExiftool\RDFParser $parser)
    {
        $this->dom = $dom;
        $this->file = $file;

        $this->cache = new \Doctrine\Common\Cache\ArrayCache();

        $this->parser = $parser->open($dom->saveXML());

        return $this;
    }

    public function getIterator()
    {
        return $this->getMetadatas()->getIterator();
    }

    /**
     *
     * @var \SplFileInfo
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     *
     * @return \Driver\Metadata\MetadataBag
     */
    public function getMetadatas()
    {
        $key = realpath($this->file->getPathname());

        if ($this->cache->contains($key))
        {
            return $this->cache->fetch($key);
        }

        $metadatas = $this->parser->ParseMetadatas();

        $this->cache->save($key, $metadatas);

        return $metadatas;
    }

    /**
     * Execute a user defined query to retrieve unknown metadatas
     *
     * @param string $query
     * @return string
     */
    public function executeQuery($query)
    {
        return $this->parser->Query($query);
    }

}
