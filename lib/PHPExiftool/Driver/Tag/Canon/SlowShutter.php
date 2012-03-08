<?php

namespace PHPExiftool\Driver\Tag\Canon;

class SlowShutter extends \PHPExiftool\Driver\Tag
{

    protected $Id = 8;

    protected $Name = 'SlowShutter';

    protected $FullName = 'Canon::ShotInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Slow Shutter';

    protected $Values = array(
        '-1' => array(
            'Id' => '-1',
            'Label' => 'n/a',
        ),
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Night Scene',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'On',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'None',
        ),
    );

}
