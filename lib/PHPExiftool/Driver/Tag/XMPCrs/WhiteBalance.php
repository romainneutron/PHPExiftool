<?php

namespace PHPExiftool\Driver\Tag\XMPCrs;

class WhiteBalance extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'WhiteBalance';

    protected $Name = 'WhiteBalance';

    protected $FullName = 'XMP::crs';

    protected $GroupName = 'XMP-crs';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-crs';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'White Balance';

    protected $flag_Avoid = true;

    protected $Values = array(
        'As Shot' => array(
            'Id' => 'As Shot',
            'Label' => 'As Shot',
        ),
        'Auto' => array(
            'Id' => 'Auto',
            'Label' => 'Auto',
        ),
        'Cloudy' => array(
            'Id' => 'Cloudy',
            'Label' => 'Cloudy',
        ),
        'Custom' => array(
            'Id' => 'Custom',
            'Label' => 'Custom',
        ),
        'Daylight' => array(
            'Id' => 'Daylight',
            'Label' => 'Daylight',
        ),
        'Flash' => array(
            'Id' => 'Flash',
            'Label' => 'Flash',
        ),
        'Fluorescent' => array(
            'Id' => 'Fluorescent',
            'Label' => 'Fluorescent',
        ),
        'Shade' => array(
            'Id' => 'Shade',
            'Label' => 'Shade',
        ),
        'Tungsten' => array(
            'Id' => 'Tungsten',
            'Label' => 'Tungsten',
        ),
    );

}
