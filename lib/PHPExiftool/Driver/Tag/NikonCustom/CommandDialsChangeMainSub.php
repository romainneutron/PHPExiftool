<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class CommandDialsChangeMainSub extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'CommandDialsChangeMainSub';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Command Dials Change Main Sub';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 64,
            'Label' => 'On',
        ),
        2 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        3 => array(
            'Id' => 32,
            'Label' => 'On',
        ),
        4 => array(
            'Id' => 64,
            'Label' => 'On (A mode only)',
        ),
    );

}
