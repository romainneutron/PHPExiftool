<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class WhiteBalance extends \PHPExiftool\Driver\Tag
{

    protected $Id = 3;

    protected $Name = 'WhiteBalance';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'White Balance';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Auto',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Daylight',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Cloudy',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Incandescent',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Manual',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Flash',
        ),
        10 => array(
            'Id' => 10,
            'Label' => 'Black & White',
        ),
        11 => array(
            'Id' => 11,
            'Label' => 'Manual',
        ),
        12 => array(
            'Id' => 12,
            'Label' => 'Shade',
        ),
    );

}
