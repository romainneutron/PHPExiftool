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

use Doctrine\Common\Collections\ArrayCollection;

/**
 *
 * Exiftool Reader, inspired by Symfony2 Finder.
 *
 * It scans files and directories, and provide an iterator on the FileEntities
 * generated based on the results.
 *
 * Example usage:
 *
 *      $Reader = new Reader();
 *
 *      $Reader->in('/path/to/directory')
 *              ->exclude('tests')
 *              ->extensions(array('jpg', 'xml));
 *
 *      //Throws an exception if no file found
 *      $first = $Reader->getFirst();
 *
 *      //Returns null if no file found
 *      $first = $Reader->getOneOrNull();
 *
 *      foreach($Reader as $entity)
 *      {
 *          //Do your logic with FileEntity
 *      }
 *
 *
 * @todo implement match conditions (-if EXPR) (name or metadata tag)
 * @todo implement match filter
 * @todo implement sort
 * @todo implement -l
 * @todo implement ignoreDotFiles
 * @todo implement ignoreVCS
 *
 * @author Romain Neutron <imprec@gmail.com>
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

    /**
     *  Constructor
     */
    public function __construct()
    {
        $this->parser = new RDFParser();
    }

    /**
     * Implements \IteratorAggregate Interface
     *
     * @return \Iterator
     */
    public function getIterator()
    {
        return $this->all()->getIterator();
    }

    /**
     * Add files to scan
     *
     * Example usage:
     *
     *      // Will scan 3 files : dc00.jpg in CWD and absolute
     *      // paths /tmp/image.jpg and /tmp/raw.CR2
     *      $Reader ->files('dc00.jpg')
     *              ->files(array('/tmp/image.jpg', '/tmp/raw.CR2'))
     *
     * @param   string|array        $files  The files
     * @return  \PHPExiftool\Reader
     */
    public function files($files)
    {
        $this->files = array_merge($this->files, (array) $files);

        return $this;
    }

    /**
     * Add dirs to scan
     *
     * Example usage:
     *
     *      // Will scan 3 dirs : documents in CWD and absolute
     *      // paths /usr and /var
     *      $Reader ->in('documents')
     *              ->in(array('/tmp', '/var'))
     *
     * @param   string|array         $dirs  The directories
     * @return  \PHPExiftool\Reader
     */
    public function in($dirs)
    {
        $this->dirs = array_merge($this->dirs, (array) $dirs);

        return $this;
    }

    /**
     * Exclude directories from scan
     *
     * Warning: only first depth directories can be excluded
     * Imagine a directory structure like below, With a scan in "root", only
     * sub1 or sub2 can be excluded, not subsub.
     *
     *      root
     *      ├── sub1
     *      └── sub2
     *          └── subsub
     *
     * Example usage:
     *
     *      // Will scan documents recursively, discarding documents/test
     *      $Reader ->in('documents')
     *              ->exclude(array('test'))
     *
     * @param   string|array        $dirs The directories
     * @return  \PHPExiftool\Reader
     */
    public function exclude($dirs)
    {
        $this->excludeDirs = array_merge($this->excludeDirs, (array) $dirs);

        return $this;
    }

    /**
     * Restrict / Discard files based on extensions
     * Extensions are case insensitive
     *
     * @param   string|array    $extensions The list of extension
     * @param   boolean         $restrict   Toggle restrict/discard method
     * @return  \PHPExiftool\Reader
     * @throws  Exception\LogicException
     */
    public function extensions($extensions, $restrict = true)
    {
        if ( ! is_null($this->extensionsToggle))
        {
            if ((boolean) $restrict !== $this->extensionsToggle)
            {
                throw new Exception\LogicException('You cannot restrict extensions AND exclude extension at the same time');
            }
        }

        $this->extensionsToggle = (boolean) $restrict;

        $this->extensions = array_merge($this->extensions, (array) $extensions);

        return $this;
    }

    /**
     * Toggle to enable follow Symbolic Links
     *
     * @return \PHPExiftool\Reader
     */
    public function followSymLinks()
    {
        $this->followSymLinks = true;

        return $this;
    }

    /**
     * Disable recursivity in directories scan.
     * If you only specify files, this toggle has no effect
     *
     * @return \PHPExiftool\Reader
     */
    public function notRecursive()
    {
        $this->recursive = false;

        return $this;
    }

    /**
     * Return the first result. If no result available, null is returned
     *
     * @return \PHPExiftool\FileEntity
     */
    public function getOneOrNull()
    {
        return count($this->all()) === 0 ? null : $this->all()->first();
    }

    /**
     * Return the first result. If no result available, throws an exception
     *
     * @return \PHPExiftool\FileEntity
     * @throws Exception\EmptyCollectionException
     */
    public function first()
    {
        if (count($this->all()) === 0)
        {
            throw new Exception\EmptyCollectionException('Collection is empty');
        }

        return $this->all()->first();
    }

    /**
     * Perform the scan and returns all the results
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function all()
    {
        if ( ! $this->collection)
        {
            $this->collection = $this->buildQueryAndExecute();
        }

        return $this->collection;
    }

    /**
     * Build the command returns an ArrayCollection of FileEntity
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    protected function buildQueryAndExecute()
    {
        $result = self::executeCommand($this->buildQuery());

        if ($result === '')
        {
            return new ArrayCollection();
        }

        $this->parser->open($result);

        return $this->parser->ParseEntities();
    }

    /**
     * Compute raw exclude rules to simple ones, based on exclude dirs and search dirs
     *
     * @param type $rawExcludeDirs
     * @param type $rawDirs
     * @return type
     * @throws Exception\RuntimeException
     */
    protected function computeExcludeDirs($rawExcludeDirs, $rawSearchDirs)
    {
        $excludeDirs = array();

        foreach ($rawExcludeDirs as $excludeDir)
        {
            $found = false;
            /**
             * is this a relative path ?
             */
            foreach ($rawSearchDirs as $dir)
            {
                $currentPrefix = realpath($dir) . DIRECTORY_SEPARATOR;

                $supposedExcluded = str_replace($currentPrefix, '', realpath($currentPrefix . $excludeDir));

                if ( ! $supposedExcluded)
                {
                    continue;
                }

                if (strpos($supposedExcluded, DIRECTORY_SEPARATOR) === false)
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
                foreach ($rawSearchDirs as $dir)
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

        return $excludeDirs;
    }

    /**
     * Build query from criterias
     *
     * @return string
     * @throws Exception\LogicException
     */
    protected function buildQuery()
    {
        if ( ! $this->dirs && ! $this->files)
        {
            throw new Exception\LogicException('You have not set any files or directory');
        }

        $command = self::getBinary() . ' -q -b -X';

        if ($this->recursive)
        {
            $command .= ' -r';
        }

        if ( ! $this->extensions)
        {
            /**
             * Should be removed with ExifTool 8.89
             */
            //$command .= ' -ext "*"';
        }
        else
        {
            if ( ! $this->extensionsToggle)
            {
                /**
                 * Should be removed with ExifTool 8.89
                 */
                //$command .= ' -ext "*"';
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

        foreach ($this->computeExcludeDirs($this->excludeDirs, $this->dirs) as $excludedDir)
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