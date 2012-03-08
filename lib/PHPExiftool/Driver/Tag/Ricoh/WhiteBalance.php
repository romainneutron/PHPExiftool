<?php

namespace PHPExiftool\Driver\Tag\Ricoh;

class WhiteBalance extends \PHPExiftool\Driver\Tag
{

    protected $Id = 38;

    protected $Name = 'WhiteBalance';

    protected $FullName = 'Ricoh::ImageInfo';

    protected $GroupName = 'Ricoh';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Ricoh';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'White Balance';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Daylight',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Cloudy',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Tungsten',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Fluorescent',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Manual',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Detail',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Multi-pattern Auto',
        ),
    );

}
