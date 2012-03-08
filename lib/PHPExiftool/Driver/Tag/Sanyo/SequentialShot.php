<?php

namespace PHPExiftool\Driver\Tag\Sanyo;

class SequentialShot extends \PHPExiftool\Driver\Tag
{

    protected $Id = 526;

    protected $Name = 'SequentialShot';

    protected $FullName = 'Sanyo::Main';

    protected $GroupName = 'Sanyo';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sanyo';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Sequential Shot';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Standard',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Best',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Adjust Exposure',
        ),
    );

}
