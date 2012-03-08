<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class MacroMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 28;

    protected $Name = 'MacroMode';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Macro Mode';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Off',
        ),
        257 => array(
            'Id' => 257,
            'Label' => 'Tele-Macro',
        ),
        513 => array(
            'Id' => 513,
            'Label' => 'Macro Zoom',
        ),
    );

}
