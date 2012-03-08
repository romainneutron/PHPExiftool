<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class CommanderInternalFlash extends \PHPExiftool\Driver\Tag
{

    protected $Id = '11.1';

    protected $Name = 'CommanderInternalFlash';

    protected $FullName = 'NikonCustom::SettingsD80';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Commander Internal Flash';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'TTL',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Manual',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Off',
        ),
    );

}
