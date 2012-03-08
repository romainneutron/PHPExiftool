<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class SafetyShift extends \PHPExiftool\Driver\Tag
{

    protected $Id = 264;

    protected $Name = 'SafetyShift';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Safety Shift';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Disable',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Enable (Tv/Av)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Enable (ISO speed)',
        ),
    );

}
