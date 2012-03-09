<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class FlashControlMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1028;

    protected $Name = 'FlashControlMode';

    protected $FullName = 'Olympus::CameraSettings';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Flash Control Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'TTL',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Auto',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Manual',
        ),
    );

}
