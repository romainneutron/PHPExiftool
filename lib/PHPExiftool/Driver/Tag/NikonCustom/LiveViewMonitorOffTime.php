<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class LiveViewMonitorOffTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = '20.2';

    protected $Name = 'LiveViewMonitorOffTime';

    protected $FullName = 'NikonCustom::SettingsD7000';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Live View Monitor Off Time';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '4 s',
        ),
        4 => array(
            'Id' => 4,
            'Label' => '10 s',
        ),
        8 => array(
            'Id' => 8,
            'Label' => '20 s',
        ),
        12 => array(
            'Id' => 12,
            'Label' => '1 min',
        ),
        16 => array(
            'Id' => 16,
            'Label' => '5 min',
        ),
        20 => array(
            'Id' => 20,
            'Label' => '10 min',
        ),
    );

}
