<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class LCDIlluminationDuringBulb extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1032;

    protected $Name = 'LCDIlluminationDuringBulb';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'LCD Illumination During Bulb';

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
