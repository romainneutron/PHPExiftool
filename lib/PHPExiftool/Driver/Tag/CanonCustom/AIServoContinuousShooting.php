<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class AIServoContinuousShooting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 21;

    protected $Name = 'AIServoContinuousShooting';

    protected $FullName = 'CanonCustom::Functions1D';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AI Servo Continuous Shooting';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Shooting not possible without focus',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Shooting possible without focus',
        ),
    );

}
