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

class ImageStyle extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'ImageStyle';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Image Style';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 1,
            'Label' => 'Standard',
        ),
        1 => array(
            'Id' => 2,
            'Label' => 'Vivid',
        ),
        2 => array(
            'Id' => 3,
            'Label' => 'Portrait',
        ),
        3 => array(
            'Id' => 4,
            'Label' => 'Landscape',
        ),
        4 => array(
            'Id' => 5,
            'Label' => 'Sunset',
        ),
        5 => array(
            'Id' => 7,
            'Label' => 'Night View/Portrait',
        ),
        6 => array(
            'Id' => 8,
            'Label' => 'B&W',
        ),
        7 => array(
            'Id' => 9,
            'Label' => 'Adobe RGB',
        ),
        8 => array(
            'Id' => 11,
            'Label' => 'Neutral',
        ),
        9 => array(
            'Id' => 129,
            'Label' => 'StyleBox1',
        ),
        10 => array(
            'Id' => 130,
            'Label' => 'StyleBox2',
        ),
        11 => array(
            'Id' => 131,
            'Label' => 'StyleBox3',
        ),
        12 => array(
            'Id' => 1,
            'Label' => 'Standard',
        ),
        13 => array(
            'Id' => 2,
            'Label' => 'Vivid',
        ),
        14 => array(
            'Id' => 3,
            'Label' => 'Portrait',
        ),
        15 => array(
            'Id' => 4,
            'Label' => 'Landscape',
        ),
        16 => array(
            'Id' => 5,
            'Label' => 'Sunset',
        ),
        17 => array(
            'Id' => 7,
            'Label' => 'Night View/Portrait',
        ),
        18 => array(
            'Id' => 8,
            'Label' => 'B&W',
        ),
        19 => array(
            'Id' => 9,
            'Label' => 'Adobe RGB',
        ),
        20 => array(
            'Id' => 11,
            'Label' => 'Neutral',
        ),
        21 => array(
            'Id' => 129,
            'Label' => 'Standard (custom)',
        ),
        22 => array(
            'Id' => 130,
            'Label' => 'Vivid (custom)',
        ),
        23 => array(
            'Id' => 131,
            'Label' => 'Neutral (custom)',
        ),
        24 => array(
            'Id' => 132,
            'Label' => 'Portrait (custom)',
        ),
        25 => array(
            'Id' => 133,
            'Label' => 'Landscape (custom)',
        ),
        26 => array(
            'Id' => 134,
            'Label' => 'B&W (custom)',
        ),
        27 => array(
            'Id' => 1,
            'Label' => 'Standard',
        ),
        28 => array(
            'Id' => 2,
            'Label' => 'Vivid',
        ),
        29 => array(
            'Id' => 3,
            'Label' => 'Portrait',
        ),
        30 => array(
            'Id' => 4,
            'Label' => 'Landscape',
        ),
        31 => array(
            'Id' => 5,
            'Label' => 'Sunset',
        ),
        32 => array(
            'Id' => 7,
            'Label' => 'Night View/Portrait',
        ),
        33 => array(
            'Id' => 8,
            'Label' => 'B&W',
        ),
    );

    protected $Index = 'mixed';

}
