<?php

namespace PHPExiftool\Driver\Tag\CanonVRD;

class WhiteBalanceAdj extends \PHPExiftool\Driver\Tag
{

    protected $Id = 24;

    protected $Name = 'WhiteBalanceAdj';

    protected $FullName = 'CanonVRD::Ver1';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'White Balance Adj';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Daylight',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Cloudy',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Tungsten',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Fluorescent',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Flash',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Shade',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Kelvin',
        ),
        30 => array(
            'Id' => 30,
            'Label' => 'Manual (Click)',
        ),
        31 => array(
            'Id' => 31,
            'Label' => 'Shot Settings',
        ),
    );

}
