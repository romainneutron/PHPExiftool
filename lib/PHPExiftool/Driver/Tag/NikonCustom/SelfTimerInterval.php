<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class SelfTimerInterval extends \PHPExiftool\Driver\Tag
{

    protected $Id = '19.2';

    protected $Name = 'SelfTimerInterval';

    protected $FullName = 'NikonCustom::SettingsD7000';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Self Timer Interval';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '0.5 s',
        ),
        16 => array(
            'Id' => 16,
            'Label' => '1 s',
        ),
        32 => array(
            'Id' => 32,
            'Label' => '2 s',
        ),
        48 => array(
            'Id' => 48,
            'Label' => '3 s',
        ),
    );

}
