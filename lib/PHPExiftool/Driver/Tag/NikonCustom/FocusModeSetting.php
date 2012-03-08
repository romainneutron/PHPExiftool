<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class FocusModeSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = '10.1';

    protected $Name = 'FocusModeSetting';

    protected $FullName = 'NikonCustom::SettingsD40';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Focus Mode Setting';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Manual',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'AF-S',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'AF-C',
        ),
        192 => array(
            'Id' => 192,
            'Label' => 'AF-A',
        ),
    );

}
