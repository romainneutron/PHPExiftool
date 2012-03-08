<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class CommanderGroupBMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = '11.3';

    protected $Name = 'CommanderGroupBMode';

    protected $FullName = 'NikonCustom::SettingsD80';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Commander Group B Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'TTL',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Auto Aperture',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Manual',
        ),
        12 => array(
            'Id' => 12,
            'Label' => 'Off',
        ),
    );

}
