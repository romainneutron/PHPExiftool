<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class LightSwitch extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0.1';

    protected $Name = 'LightSwitch';

    protected $FullName = 'NikonCustom::SettingsD90';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Light Switch';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'LCD Backlight',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'LCD Backlight and Shooting Information',
        ),
    );

}
