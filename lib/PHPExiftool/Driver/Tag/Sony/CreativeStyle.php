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

class CreativeStyle extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'CreativeStyle';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Creative Style';

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
            'Id' => 6,
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
            'Id' => 12,
            'Label' => 'Clear',
        ),
        10 => array(
            'Id' => 13,
            'Label' => 'Deep',
        ),
        11 => array(
            'Id' => 14,
            'Label' => 'Light',
        ),
        12 => array(
            'Id' => 15,
            'Label' => 'Autumn',
        ),
        13 => array(
            'Id' => 16,
            'Label' => 'Sepia',
        ),
        14 => array(
            'Id' => 1,
            'Label' => 'Standard',
        ),
        15 => array(
            'Id' => 2,
            'Label' => 'Vivid',
        ),
        16 => array(
            'Id' => 3,
            'Label' => 'Portrait',
        ),
        17 => array(
            'Id' => 4,
            'Label' => 'Landscape',
        ),
        18 => array(
            'Id' => 5,
            'Label' => 'Sunset',
        ),
        19 => array(
            'Id' => 6,
            'Label' => 'Night View/Portrait',
        ),
        20 => array(
            'Id' => 8,
            'Label' => 'B&W',
        ),
    );

}
