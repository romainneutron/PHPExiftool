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
