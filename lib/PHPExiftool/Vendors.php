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
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class Vendors
{

    public static function Init()
    {
        set_time_limit(300);
        chdir(__DIR__ . '/../../');

        system('git submodule init');
        system('git submodule update');

        $iterator = new \RecursiveDirectoryIterator(__DIR__ . '/../../lib/vendor/');

        foreach ($iterator as $file)
        {
            /* @var $file SplFileInfo */
            if ($file->isDir())
            {
                $cmd = sprintf(
                  'cd %s && git submodule init && git submodule update'
                  , escapeshellarg($file->getPathname())
                );
                system($cmd);
            }
        }

        if(function_exists('chmod'))
        {
            chmod(__DIR__ . '/../vendor/Exiftool/exiftool', 0750);
        }
    }

}
