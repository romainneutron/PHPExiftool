<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class LCDPanels extends \PHPExiftool\Driver\Tag
{

    protected $Id = 8;

    protected $Name = 'LCDPanels';

    protected $FullName = 'CanonCustom::Functions1D';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Top/Back LCD Panels';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Remain. shots/File no.',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'ISO/Remain. shots',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'ISO/File no.',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Shots in folder/Remain. shots',
        ),
    );

}
