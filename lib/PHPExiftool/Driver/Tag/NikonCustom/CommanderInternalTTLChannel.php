<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class CommanderInternalTTLChannel extends \PHPExiftool\Driver\Tag
{

    protected $Id = '18.2';

    protected $Name = 'CommanderInternalTTLChannel';

    protected $FullName = 'NikonCustom::SettingsD700';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Commander Internal TTL Channel';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '1 ch',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '2 ch',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '3 ch',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '4 ch',
        ),
    );

}
