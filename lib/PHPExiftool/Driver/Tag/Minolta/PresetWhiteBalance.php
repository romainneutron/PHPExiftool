<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class PresetWhiteBalance extends \PHPExiftool\Driver\Tag
{

    protected $Id = 36;

    protected $Name = 'PresetWhiteBalance';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Preset White Balance';

    protected $Values = array(
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
            'Label' => 'Shade',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Tungsten',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Fluorescent',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Flash',
        ),
    );

}
