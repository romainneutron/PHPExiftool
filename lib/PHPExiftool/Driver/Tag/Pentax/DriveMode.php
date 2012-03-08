<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class DriveMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 52;

    protected $Name = 'DriveMode';

    protected $FullName = 'Pentax::Main';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Drive Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Single-frame',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Continuous',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Continuous (Lo)',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Burst',
        ),
        255 => array(
            'Id' => 255,
            'Label' => 'Video',
        ),
    );

}
