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
 * @todo match conditions (-if EXPR) (name or metadata tag)
 * @todo do match filter
 * @todo sort
 * @todo implement -l
 * @todo implement ignoreDotFiles
 * @todo ignoreVCS
 */
class Reader extends Exiftool implements \IteratorAggregate
{

    protected $files = array();
    protected $dirs = array();
    protected $excludeDirs = array();
    protected $extensions = array();
    protected $extensionsToggle = null;
    protected $followSymLinks   = false;
    protected $recursive        = true;
    protected $parser;
    protected $collection;

    public function __construct()
    {
        $this->parser = new RDFParser();
    }

    public function getIterator()
    {
        return $this->all()->getIterator();
    }

    /**
     * add files as argument
     */
    public function files($files)
    {
        $this->files = array_merge($this->files, (array) $files);

        return $this;
    }

    /**
     * include directories (-i)
     */
    public function in($dirs)
    {
        $this->dirs = array_merge($this->dirs, (array) $dirs);

        return $this;
    }

    /**
     * exclude (-i)
     */
    public function exclude($dirs)
    {
        $this->excludeDirs = array_merge($this->excludeDirs, (array) $dirs);

        return $this;
    }

    /**
     * (-ext)
     */
    public function extensions($extensions, $restrict = true)
    {
        if ( ! is_null($this->extensionsToggle))
        {
            if ((boolean) $restrict !== $this->extensionsToggle)
            {
                throw new \PHPExiftool\Exception\LogicException('You cannot restrict extensions AND exclude extension at the same time');
            }
        }

        $this->extensionsToggle = (boolean) $restrict;

        $this->extensions = array_merge($this->extensions, (array) $extensions);

        return $this;
    }

    /**
     * (-i SYMLINKS)
     */
    public function followSymLinks()
    {
        $this->followSymLinks = true;

        return $this;
    }

    /**
     * (-r)
     */
    public function notRecursive()
    {
        $this->recursive = false;

        return $this;
    }

    public function getOneOrNull()
    {

        return count($this->all()) === 0 ? null : $this->all()->first();
    }

    public function first()
    {
        if (count($this->all()) === 0)
        {
            throw new \PHPExiftool\Exception\EmptyCollectionException('Collection is empty');
        }

        return $this->all()->first();
    }

    public function all()
    {
        if ( ! $this->collection)
        {
            $this->collection = $this->buildQueryAndExecute();
        }

        return $this->collection;
    }

    protected function buildQueryAndExecute()
    {
        $result = self::executeCommand($this->buildQuery());

        if ($result === '')
        {
            return new \Doctrine\Common\Collections\ArrayCollection();
        }

        $this->parser->open($result);

        return $this->parser->ParseEntities();
    }

    protected function computeExcludeDirs()
    {
        $excludeDirs = array();

        foreach ($this->excludeDirs as $excludeDir)
        {


            $found = false;
            /**
             * is this a relative path ?
             */
            foreach ($this->dirs as $dir)
            {
                $currentPrefix = $dir . DIRECTORY_SEPARATOR;

                $supposedExcluded = str_replace($currentPrefix, '', realpath($currentPrefix . $excludeDir));

                if ( ! $supposedExcluded)
                {
                    continue;
                }

                if (strpos($supposedExcluded, DIRECTORY_SEPARATOR) === 0)
                {
                    $excludeDirs[] = $supposedExcluded;
                    $found         = true;
                    break;
                }
            }

            if ($found)
            {
                continue;
            }

            /**
             * is this an absolute path ?
             */
            $supposedExcluded = realpath($excludeDir);

            if ($supposedExcluded)
            {
                foreach ($this->dirs as $dir)
                {
                    $searchDir = realpath($dir) . DIRECTORY_SEPARATOR;

                    $supposedRelative = str_replace($searchDir, '', $supposedExcluded);

                    if (strpos($supposedRelative, DIRECTORY_SEPARATOR) !== false)
                    {
                        continue;
                    }
                    if (strpos($supposedExcluded, $searchDir) !== 0)
                    {
                        continue;
                    }

                    if ( ! trim($supposedRelative))
                    {
                        continue;
                    }

                    $excludeDirs[] = $supposedRelative;
                    $found         = true;
                    break;
                }
            }


            if ( ! $found)
            {
                throw new Exception\RuntimeException(sprintf("Invalid exclude dir %s ; Exclude dir is limited to the name of a directory at first depth", $excludeDir));
            }
        }

        $this->excludeDirs = $excludeDirs;

        return $this;
    }

    protected function buildQuery()
    {
        if ( ! $this->dirs && ! $this->files)
        {
            throw new \PHPExiftool\Exception\LogicException('You have not set any files or directory');
        }

        $command = realpath(__DIR__ . '/../../lib/vendor/Exiftool/exiftool') . ' -q -b -X';

        if ($this->recursive)
        {
            $command .= ' -r';
        }

        if ( ! $this->extensions)
        {
//            $command .= ' -ext "*"';
        }
        else
        {
            if ( ! $this->extensionsToggle)
            {
//                $command .= ' -ext "*"';
                $extensionPrefix = ' --ext';
            }
            else
            {
                $extensionPrefix = ' -ext';
            }

            foreach ($this->extensions as $extension)
            {
                $command .= $extensionPrefix . ' ' . escapeshellarg($extension);
            }
        }

        if ( ! $this->followSymLinks)
        {
            $command .= ' -i SYMLINKS';
        }

        /**
         * limit exclusion to 1 subddir
         */
        $this->computeExcludeDirs();

        foreach ($this->excludeDirs as $excludedDir)
        {
            $command .= ' -i ' . escapeshellarg($excludedDir);
        }

        foreach ($this->dirs as $dir)
        {
            $command .= ' ' . escapeshellarg(realpath($dir));
        }

        foreach ($this->files as $file)
        {
            $command .= ' ' . escapeshellarg(realpath($file));
        }

        return $command;
    }

}