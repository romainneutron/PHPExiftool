<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class FlashMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'FlashMode';

    protected $FullName = 'mixed';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Flash Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Fill-in',
        ),
        3 => array(
            'Id' => 4,
            'Label' => 'Red-eye',
        ),
        4 => array(
            'Id' => 8,
            'Label' => 'Slow-sync',
        ),
        5 => array(
            'Id' => 16,
            'Label' => 'Forced On',
        ),
        6 => array(
            'Id' => 32,
            'Label' => '2nd Curtain',
        ),
        7 => array(
            'Id' => 2,
            'Label' => 'On',
        ),
        8 => array(
            'Id' => 3,
            'Label' => 'Off',
        ),
    );

}
