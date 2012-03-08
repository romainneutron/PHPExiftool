<?php

namespace PHPExiftool\Driver\Tag\Jpeg2000;

class DisplayXResolutionUnit extends \PHPExiftool\Driver\Tag
{

    protected $Id = 9;

    protected $Name = 'DisplayXResolutionUnit';

    protected $FullName = 'Jpeg2000::DisplayResolution';

    protected $GroupName = 'Jpeg2000';

    protected $g0 = 'Jpeg2000';

    protected $g1 = 'Jpeg2000';

    protected $g2 = 'Image';

    protected $Type = 'int8s';

    protected $Writable = false;

    protected $Description = 'Display X Resolution Unit';

    protected $Values = array(
        '-3' => array(
            'Id' => '-3',
            'Label' => 'km',
        ),
        '-2' => array(
            'Id' => '-2',
            'Label' => '100 m',
        ),
        '-1' => array(
            'Id' => '-1',
            'Label' => '10 m',
        ),
        0 => array(
            'Id' => 0,
            'Label' => 'm',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '10 cm',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'cm',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'mm',
        ),
        4 => array(
            'Id' => 4,
            'Label' => '0.1 mm',
        ),
        5 => array(
            'Id' => 5,
            'Label' => '0.01 mm',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'um',
        ),
    );

}
