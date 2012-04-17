<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class MacroLED extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4618;

    protected $Name = 'MacroLED';

    protected $FullName = 'Olympus::FocusInfo';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Macro LED';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
    );

}
