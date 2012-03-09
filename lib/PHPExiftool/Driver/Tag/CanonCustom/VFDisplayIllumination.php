<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class VFDisplayIllumination extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1296;

    protected $Name = 'VFDisplayIllumination';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'VF Display Illumination';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Enable',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Disable',
        ),
    );

}
