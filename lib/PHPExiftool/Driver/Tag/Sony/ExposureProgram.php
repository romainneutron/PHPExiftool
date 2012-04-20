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

class ExposureProgram extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'ExposureProgram';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Exposure Program';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Manual',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Program AE',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Aperture-priority AE',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Shutter speed priority AE',
        ),
        5 => array(
            'Id' => 8,
            'Label' => 'Program Shift A',
        ),
        6 => array(
            'Id' => 9,
            'Label' => 'Program Shift S',
        ),
        7 => array(
            'Id' => 16,
            'Label' => 'Portrait',
        ),
        8 => array(
            'Id' => 17,
            'Label' => 'Sports',
        ),
        9 => array(
            'Id' => 18,
            'Label' => 'Sunset',
        ),
        10 => array(
            'Id' => 19,
            'Label' => 'Night Portrait',
        ),
        11 => array(
            'Id' => 20,
            'Label' => 'Landscape',
        ),
        12 => array(
            'Id' => 21,
            'Label' => 'Macro',
        ),
        13 => array(
            'Id' => 35,
            'Label' => 'Auto No Flash',
        ),
        14 => array(
            'Id' => 1,
            'Label' => 'Program AE',
        ),
        15 => array(
            'Id' => 2,
            'Label' => 'Aperture-priority AE',
        ),
        16 => array(
            'Id' => 3,
            'Label' => 'Shutter speed priority AE',
        ),
        17 => array(
            'Id' => 4,
            'Label' => 'Manual',
        ),
        18 => array(
            'Id' => 5,
            'Label' => 'Cont. Priority AE',
        ),
        19 => array(
            'Id' => 16,
            'Label' => 'Auto',
        ),
        20 => array(
            'Id' => 17,
            'Label' => 'Auto No Flash',
        ),
        21 => array(
            'Id' => 49,
            'Label' => 'Portrait',
        ),
        22 => array(
            'Id' => 50,
            'Label' => 'Landscape',
        ),
        23 => array(
            'Id' => 51,
            'Label' => 'Macro',
        ),
        24 => array(
            'Id' => 52,
            'Label' => 'Sports',
        ),
        25 => array(
            'Id' => 53,
            'Label' => 'Sunset',
        ),
        26 => array(
            'Id' => 54,
            'Label' => 'Night view',
        ),
        27 => array(
            'Id' => 55,
            'Label' => 'Night view/portrait',
        ),
        28 => array(
            'Id' => 56,
            'Label' => 'Handheld Night Shot',
        ),
        29 => array(
            'Id' => 57,
            'Label' => '3D Sweep Panorama',
        ),
        30 => array(
            'Id' => 65,
            'Label' => 'Auto Advanced',
        ),
        31 => array(
            'Id' => 80,
            'Label' => 'Sweep Panorama',
        ),
        32 => array(
            'Id' => 128,
            'Label' => 'Toy Camera',
        ),
        33 => array(
            'Id' => 129,
            'Label' => 'Pop Color',
        ),
        34 => array(
            'Id' => 130,
            'Label' => 'Posterization',
        ),
        35 => array(
            'Id' => 131,
            'Label' => 'Posterization B/W',
        ),
        36 => array(
            'Id' => 132,
            'Label' => 'Retro Photo',
        ),
        37 => array(
            'Id' => 133,
            'Label' => 'High-key',
        ),
        38 => array(
            'Id' => 134,
            'Label' => 'Partial Color Red',
        ),
        39 => array(
            'Id' => 135,
            'Label' => 'Partial Color Green',
        ),
        40 => array(
            'Id' => 136,
            'Label' => 'Partial Color Blue',
        ),
        41 => array(
            'Id' => 137,
            'Label' => 'Partial Color Yellow',
        ),
        42 => array(
            'Id' => 138,
            'Label' => 'High Contrast Monochrome',
        ),
    );

}
