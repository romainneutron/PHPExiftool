<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class ModifiedSaturation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1284;

    protected $Name = 'ModifiedSaturation';

    protected $FullName = 'Olympus::CameraSettings';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Modified Saturation';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'CM1 (Red Enhance)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'CM2 (Green Enhance)',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'CM3 (Blue Enhance)',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'CM4 (Skin Tones)',
        ),
    );

}
