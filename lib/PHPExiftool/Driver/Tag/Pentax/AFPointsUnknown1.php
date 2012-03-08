<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class AFPointsUnknown1 extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'AFPointsUnknown1';

    protected $FullName = 'Pentax::AFInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'AF Points Unknown 1';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Upper-left',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Top',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Upper-right',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Left',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Mid-left',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Center',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Mid-right',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Right',
        ),
        256 => array(
            'Id' => 256,
            'Label' => 'Lower-left',
        ),
        512 => array(
            'Id' => 512,
            'Label' => 'Bottom',
        ),
        1024 => array(
            'Id' => 1024,
            'Label' => 'Lower-right',
        ),
        1911 => array(
            'Id' => 1911,
            'Label' => 'Central 9 points',
        ),
        2047 => array(
            'Id' => 2047,
            'Label' => 'All',
        ),
    );

}
