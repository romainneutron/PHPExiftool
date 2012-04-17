<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class LVShootingAreaDisplay extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1035;

    protected $Name = 'LVShootingAreaDisplay';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'LV Shooting Area Display';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Masked',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Outlined',
        ),
    );

}
