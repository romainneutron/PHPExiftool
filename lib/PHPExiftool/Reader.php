<?php

namespace PHPExiftool;

/**
 * @todo match conditions (-if EXPR) (name or metadata tag)
 * @todo do match filter
 * @todo sort
 */
class Reader extends Exiftool implements \IteratorAggregate
{

//$exiftool = new Exiftool\Reader();
//$exiftool
//  ->files(arrayFiles)
//  ->extensions('.gitmodules')
//  ->exclude('.gitmodules')
//  ->in(arrayDirs)
//      ->getOneOrNull();
//      ->first();
//      ->all();

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

        foreach ($this->excludeDirs as $dir)
        {
            $found = false;
            $this->normalizePathname($dir);

            foreach ($this->dirs as $searchDir)
            {
                $searchDir = $this->normalizePathname($searchDir) . '/';

                $local_path = str_replace($searchDir, '', $dir);

                if (strpos($dir, $searchDir) === 0 && $dir !== $local_path)
                {
                    $command .= ' -i ' . escapeshellarg($local_path);
                    $found = true;
                    break;
                }
            }

            if ( ! $found)
            {
                $command .= ' -i ' . escapeshellarg($dir);
            }
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

    protected function normalizePathname(&$pathname)
    {
        $pathname = realpath($pathname);

        return $pathname;
    }

//      ->getOneOrNull();
//      ->first();
//      ->all();
//    const IGNORE_VCS_FILES = 1;
//    const IGNORE_DOT_FILES = 2;
//    static private $vcsPatterns = array('.svn', '_svn', 'CVS', '_darcs', '.arch-params', '.monotone', '.bzr', '.git', '.hg');
//
//    public function ignoreDotFiles($ignoreDotFiles)
//    {
//        if ($ignoreDotFiles)
//        {
//            $this->ignore = $this->ignore | static::IGNORE_DOT_FILES;
//        }
//        else
//        {
//            $this->ignore = $this->ignore ^ static::IGNORE_DOT_FILES;
//        }
//
//        return $this;
//    }
//
//    /**
//     * Forces the finder to ignore version control directories.
//     *
//     * @param Boolean $ignoreVCS Whether to exclude VCS files or not
//     *
//     * @return Finder The current Finder instance
//     *
//     * @see Symfony\Component\Finder\Iterator\ExcludeDirectoryFilterIterator
//     *
//     * @api
//     */
//    public function ignoreVCS($ignoreVCS)
//    {
//        if ($ignoreVCS)
//        {
//            $this->ignore = $this->ignore | static::IGNORE_VCS_FILES;
//        }
//        else
//        {
//            $this->ignore = $this->ignore ^ static::IGNORE_VCS_FILES;
//        }
//
//        return $this;
//    }

}