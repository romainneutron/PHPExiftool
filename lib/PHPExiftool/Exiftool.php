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

use PHPExiftool\Exception\RuntimeException;
use Symfony\Component\Process\Process;

abstract class Exiftool
{

    /**
     * Execute a command and return the output
     *
     * @param  string     $command
     * @return string
     * @throws \Exception
     */
    protected static function executeCommand($command)
    {
        $process = new Process($command);
        $process->run();

        if ( ! $process->isSuccessful()) {
            throw new RuntimeException(sprintf('Command %s failed : %s, exitcode %s', $command, $process->getErrorOutput(), $process->getExitCode()));
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
