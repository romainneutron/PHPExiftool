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
     * Return an Entity corresponding to the file
     *
     * @param \SplFileInfo $file
     * @return \PHPExiftool\FileEntity
     * @throws \LogicException
     * @throws \Exception
     */
    public function read(\SplFileInfo $file)
    {
        if ( ! $file->isFile())
        {
            throw new \LogicException('Exiftool::read must be used to read files, '
              . 'if you want to read directories, use Exiftool::readDirectory');
        }

        $Entities = RDFParser::Parse(static::Xtract($file));

        if ($Entities->count() !== 1)
        {
            throw new \Exception('Something went wrong');
        }

        return $Entities->first();
    }

    /**
     * Returns an ArrayCollection of \PHPExiftool\FileEntity found in the
     * directory
     *
     * @param \SplFileInfo $Dir
     * @param boolean $recursive
     * @return \Doctrine\Common\Collections\ArrayCollection
     * @throws \LogicException
     */
    public function readDirectory(\SplFileInfo $Dir, $recursive)
    {
        if ( ! $Dir->isDir())
        {
            throw new \LogicException('Exiftool::readDirectory must be used to read dirs, '
              . 'if you want to read files, use Exiftool::read');
        }

        return RDFParser::Parse(static::Xtract($Dir, $recursive));
    }

    /**
     * Execute exiftool with a -X option against the file|directory provided
     * Return the output, a RDF file
     *
     * @see http://www.sno.phy.queensu.ca/~phil/exiftool/exiftool_pod.html#item_x
     * @param \SplFileInfo $file
     * @param boolean $recursive
     * @return string
     */
    public static function Xtract(\SplFileInfo $file, $recursive = false)
    {
        $option = $recursive ? ' -R ' : '';

        $command = self::getBinary() . ' -X ' . $option . escapeshellarg($file->getPathname());

        return static::executeCommand($command);
    }

    /**
     * Return the result of a Exiftool -list* command
     *
     * @see http://www.sno.phy.queensu.ca/~phil/exiftool/exiftool_pod.html#item__2dlist_2c__2dlistw_2c__2dlistf_2c__2dlistr_2c__2d
     * @param string $type One of the LISTTYPE_* constants
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

        if ( ! in_array($type, $available))
            throw new \Exception('Unknown list attribute');

        return static::executeCommand(self::getBinary() . ' -f -list' . $type);
    }

    /**
     * Execute a command and return the output
     *
     * @param string $command
     * @return string
     * @throws \Exception
     */
    private static function executeCommand($command)
    {
        /**
         * Windows custom exec
         * Symfony Process can fail
         *
         * @see https://bugs.php.net/bug.php?id=60120
         * @see https://bugs.php.net/bug.php?id=51800
         */
        if (defined('PHP_WINDOWS_VERSION_BUILD'))
        {
            if (null === $output = shell_exec($command))
            {
                throw new \Exception(sprintf('Command %s failed', $command));
            }

            return $output;
        }

        $process = new Process($command);
        $process->run();

        if ( ! $process->isSuccessful())
        {
            throw new \Exception(sprintf('Command %s failed', $command));
        }

        return $process->getOutput();
    }

    /**
     *
     * @return string
     */
    private static function getBinary()
    {
        if (defined('PHP_WINDOWS_VERSION_BUILD'))
        {
            return realpath(__DIR__ . '/../../lib/vendor/Exiftool/exiftool.exe');
        }
        else
        {
            return realpath(__DIR__ . '/../../lib/vendor/Exiftool/exiftool');
        }
    }

}
