<?php

namespace PHPExiftool\Driver\Tag\Canon;

class FocusMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 7;

    protected $Name = 'FocusMode';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Focus Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'One-shot AF',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'AI Servo AF',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'AI Focus AF',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Manual Focus (3)',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Single',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Continuous',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Manual Focus (6)',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Pan Focus',
        ),
    );

}
