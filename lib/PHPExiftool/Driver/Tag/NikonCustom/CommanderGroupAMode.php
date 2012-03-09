<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class CommanderGroupAMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = '11.2';

    protected $Name = 'CommanderGroupAMode';

    protected $FullName = 'NikonCustom::SettingsD80';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Commander Group A Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'TTL',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Auto Aperture',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Manual',
        ),
        48 => array(
            'Id' => 48,
            'Label' => 'Off',
        ),
    );

}
