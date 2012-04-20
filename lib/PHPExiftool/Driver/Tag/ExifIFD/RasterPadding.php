<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ExifIFD;

class RasterPadding extends \PHPExiftool\Driver\Tag
{

    protected $Id = 34019;

    protected $Name = 'RasterPadding';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Raster Padding';

    protected $local_g1 = 'ExifIFD';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Byte',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Word',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Long Word',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Sector',
        ),
        10 => array(
            'Id' => 10,
            'Label' => 'Long Sector',
        ),
    );

}
