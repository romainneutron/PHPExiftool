<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class ISOSensitivityStep extends \PHPExiftool\Driver\Tag
{

    protected $Id = '6.2';

    protected $Name = 'ISOSensitivityStep';

    protected $FullName = 'NikonCustom::SettingsD7000';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'ISO Sensitivity Step';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '1/3 EV',
        ),
        16 => array(
            'Id' => 16,
            'Label' => '1/2 EV',
        ),
    );

}
