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

abstract class Exiftool
{

    /**
     * Execute a command and return the output
     *
     * @param string $command
     * @return string
     * @throws \Exception
     */
    protected static function executeCommand($command)
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
            throw new Exception\RuntimeException(sprintf('Command %s failed', $command));
        }

        return $process->getOutput();
    }

    /**
     *
     * @return string
     */
    protected static function getBinary()
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
