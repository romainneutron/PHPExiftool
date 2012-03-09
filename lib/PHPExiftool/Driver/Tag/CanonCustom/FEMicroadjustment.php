<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class FEMicroadjustment extends \PHPExiftool\Driver\Tag
{

    protected $Id = 272;

    protected $Name = 'FEMicroadjustment';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'FE Microadjustment';

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
