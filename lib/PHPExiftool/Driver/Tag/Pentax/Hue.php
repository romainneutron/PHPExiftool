<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class Hue extends \PHPExiftool\Driver\Tag
{

    protected $Id = 103;

    protected $Name = 'Hue';

    protected $FullName = 'Pentax::Main';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Hue';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '-2',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Normal',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 2,
        ),
        3 => array(
            'Id' => 3,
            'Label' => '-1',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 1,
        ),
        5 => array(
            'Id' => 5,
            'Label' => '-3',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 3,
        ),
        7 => array(
            'Id' => 7,
            'Label' => '-4',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 4,
        ),
        65535 => array(
            'Id' => 65535,
            'Label' => 'None',
        ),
    );

}
