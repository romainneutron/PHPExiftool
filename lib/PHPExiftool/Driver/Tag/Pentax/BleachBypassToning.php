<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class BleachBypassToning extends \PHPExiftool\Driver\Tag
{

    protected $Id = 127;

    protected $Name = 'BleachBypassToning';

    protected $FullName = 'Pentax::Main';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Bleach Bypass Toning';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Green',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Yellow',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Orange',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Red',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Magenta',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Purple',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Blue',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Cyan',
        ),
        65535 => array(
            'Id' => 65535,
            'Label' => 'Off',
        ),
    );

}
