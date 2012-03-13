<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class AutoLightingOptimizer extends \PHPExiftool\Driver\Tag
{

    protected $Id = 516;

    protected $Name = 'AutoLightingOptimizer';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Auto Lighting Optimizer';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Standard',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Low',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Strong',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Disable',
        ),
        4 => array(
            'Id' => 0,
            'Label' => 'Enable',
        ),
        5 => array(
            'Id' => 1,
            'Label' => 'Disable',
        ),
    );

    protected $Index = 'mixed';

}
