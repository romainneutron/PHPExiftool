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
        if (defined('PHP_WINDOWS_VERSION_BUILD')) {
            if (null === $output = shell_exec($command)) {
                throw new Exception\RuntimeException(sprintf('Command %s failed', $command));
            }

            return $output;
        }

        $process = new Process($command);
        $process->run();

        if ( ! $process->isSuccessful()) {
            throw new Exception\RuntimeException(sprintf('Command %s failed : %s', $command, $process->getErrorOutput()));
        }

        return $process->getOutput();
    }

    /**
     *
     * @return string
     */
    protected static function getBinary()
    {
        $dev = __DIR__ . '/../../vendor/phpexiftool/exiftool/exiftool';
        $packaged = __DIR__ . '/../../../../phpexiftool/exiftool/exiftool';

        foreach (array($packaged, $dev) as $location) {

            if (defined('PHP_WINDOWS_VERSION_BUILD')) {
                $location .= '.exe';
            }

            if (is_executable($location)) {
                return realpath($location);
            }
        }
    }
}
