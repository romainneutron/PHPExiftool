<?php

namespace PHPExiftool\Driver\Tag\Sony;

class DriveMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4;

    protected $Name = 'DriveMode';

    protected $FullName = 'Sony::CameraSettings';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Drive Mode';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Single Frame',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Continuous High',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Self-timer 10 sec',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Self-timer 2 sec',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Continuous Bracketing',
        ),
        12 => array(
            'Id' => 12,
            'Label' => 'Continuous Low',
        ),
        18 => array(
            'Id' => 18,
            'Label' => 'White Balance Bracketing Low',
        ),
        19 => array(
            'Id' => 19,
            'Label' => 'D-Range Optimizer Bracketing Low',
        ),
    );

}
