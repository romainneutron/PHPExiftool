<?php

namespace PHPExiftool\Driver\Tag\Canon;

class AutoRotate extends \PHPExiftool\Driver\Tag
{

    protected $Id = 27;

    protected $Name = 'AutoRotate';

    protected $FullName = 'Canon::ShotInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Auto Rotate';

    protected $Values = array(
        '-1' => array(
            'Id' => '-1',
            'Label' => 'n/a',
        ),
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Rotate 90 CW',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Rotate 180',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Rotate 270 CW',
        ),
    );

}
