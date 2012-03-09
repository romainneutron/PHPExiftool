<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class SafetyShiftInAvOrTv extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'SafetyShiftInAvOrTv';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Safety Shift In Av Or Tv';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Disable',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Enable',
        ),
    );

}
