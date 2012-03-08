<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class RawDevSettings extends \PHPExiftool\Driver\Tag
{

    protected $Id = 268;

    protected $Name = 'RawDevSettings';

    protected $FullName = 'Olympus::RawDevelopment';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Raw Dev Settings';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'WB Color Temp',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'WB Gray Point',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Saturation',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Contrast',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Sharpness',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Color Space',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'High Function',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Noise Reduction',
        ),
    );

}
