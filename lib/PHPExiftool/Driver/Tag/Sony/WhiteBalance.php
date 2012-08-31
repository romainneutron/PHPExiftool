<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sony;

use PHPExiftool\Driver\AbstractTag;

class WhiteBalance extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'WhiteBalance';

    protected $FullName = 'Sony::Main';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'White Balance';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Color Temperature/Color Filter',
        ),
        2 => array(
            'Id' => 16,
            'Label' => 'Daylight',
        ),
        3 => array(
            'Id' => 32,
            'Label' => 'Cloudy',
        ),
        4 => array(
            'Id' => 48,
            'Label' => 'Shade',
        ),
        5 => array(
            'Id' => 64,
            'Label' => 'Tungsten',
        ),
        6 => array(
            'Id' => 80,
            'Label' => 'Flash',
        ),
        7 => array(
            'Id' => 96,
            'Label' => 'Fluorescent',
        ),
        8 => array(
            'Id' => 112,
            'Label' => 'Custom',
        ),
        9 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        10 => array(
            'Id' => 4,
            'Label' => 'Manual',
        ),
        11 => array(
            'Id' => 5,
            'Label' => 'Daylight',
        ),
        12 => array(
            'Id' => 6,
            'Label' => 'Cloudy',
        ),
        13 => array(
            'Id' => 7,
            'Label' => 'Cool White Fluorescent',
        ),
        14 => array(
            'Id' => 8,
            'Label' => 'Day White Fluorescent',
        ),
        15 => array(
            'Id' => 9,
            'Label' => 'Daylight Fluorescent',
        ),
        16 => array(
            'Id' => 11,
            'Label' => 'Warm White Fluorescent',
        ),
        17 => array(
            'Id' => 14,
            'Label' => 'Incandescent',
        ),
        18 => array(
            'Id' => 15,
            'Label' => 'Flash',
        ),
        19 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        20 => array(
            'Id' => 4,
            'Label' => 'Manual',
        ),
        21 => array(
            'Id' => 5,
            'Label' => 'Daylight',
        ),
        22 => array(
            'Id' => 6,
            'Label' => 'Cloudy',
        ),
        23 => array(
            'Id' => 7,
            'Label' => 'White Fluorescent',
        ),
        24 => array(
            'Id' => 8,
            'Label' => 'Cool White Fluorescent',
        ),
        25 => array(
            'Id' => 9,
            'Label' => 'Day White Fluorescent',
        ),
        26 => array(
            'Id' => 14,
            'Label' => 'Incandescent',
        ),
        27 => array(
            'Id' => 15,
            'Label' => 'Flash',
        ),
        28 => array(
            'Id' => 17,
            'Label' => 'Underwater 1 (Blue Water)',
        ),
        29 => array(
            'Id' => 18,
            'Label' => 'Underwater 2 (Green Water)',
        ),
    );

    protected $Index = 'mixed';

}
