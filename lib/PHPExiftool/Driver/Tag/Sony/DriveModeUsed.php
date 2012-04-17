<?php

namespace PHPExiftool\Driver\Tag\Sony;

class DriveModeUsed extends \PHPExiftool\Driver\Tag
{

    protected $Id = 52;

    protected $Name = 'DriveModeUsed';

    protected $FullName = 'Sony::CameraSettings3';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Drive Mode Used';

    protected $flag_Permanent = true;

    protected $Values = array(
        16 => array(
            'Id' => 16,
            'Label' => 'Single Frame',
        ),
        33 => array(
            'Id' => 33,
            'Label' => 'Continuous High',
        ),
        34 => array(
            'Id' => 34,
            'Label' => 'Continuous Low',
        ),
        48 => array(
            'Id' => 48,
            'Label' => 'Speed Priority Continuous',
        ),
        81 => array(
            'Id' => 81,
            'Label' => 'Self-timer 10 sec',
        ),
        82 => array(
            'Id' => 82,
            'Label' => 'Self-timer 2 sec, Mirror Lock-up',
        ),
        113 => array(
            'Id' => 113,
            'Label' => 'Continuous Bracketing 0.3 EV',
        ),
        117 => array(
            'Id' => 117,
            'Label' => 'Continuous Bracketing 0.7 EV',
        ),
        145 => array(
            'Id' => 145,
            'Label' => 'White Balance Bracketing Low',
        ),
        146 => array(
            'Id' => 146,
            'Label' => 'White Balance Bracketing High',
        ),
        192 => array(
            'Id' => 192,
            'Label' => 'Remote Commander',
        ),
        209 => array(
            'Id' => 209,
            'Label' => 'Continuous - HDR',
        ),
        210 => array(
            'Id' => 210,
            'Label' => 'Continuous - Multi Frame NR',
        ),
        211 => array(
            'Id' => 211,
            'Label' => 'Continuous - Handheld Night Shot',
        ),
        213 => array(
            'Id' => 213,
            'Label' => 'Continuous - Sweep Panorama',
        ),
        214 => array(
            'Id' => 214,
            'Label' => 'Continuous - 3D Sweep Panorama',
        ),
    );

}
