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

class SceneMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 45091;

    protected $Name = 'SceneMode';

    protected $FullName = 'Sony::Main';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Scene Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Standard',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Portrait',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Text',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Night Scene',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Sunset',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Sports',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Landscape',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Night Portrait',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Macro',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Super Macro',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Auto',
        ),
        17 => array(
            'Id' => 17,
            'Label' => 'Night View/Portrait',
        ),
        18 => array(
            'Id' => 18,
            'Label' => 'Sweep Panorama',
        ),
        19 => array(
            'Id' => 19,
            'Label' => 'Handheld Night Shot',
        ),
        20 => array(
            'Id' => 20,
            'Label' => 'Anti Motion Blur',
        ),
        21 => array(
            'Id' => 21,
            'Label' => 'Cont. Priority AE',
        ),
        22 => array(
            'Id' => 22,
            'Label' => 'Auto+',
        ),
        23 => array(
            'Id' => 23,
            'Label' => '3D Sweep Panorama',
        ),
        65535 => array(
            'Id' => 65535,
            'Label' => 'n/a',
        ),
    );

}
