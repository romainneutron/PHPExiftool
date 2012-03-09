<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class MultiControllerWhileMetering extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1303;

    protected $Name = 'MultiControllerWhileMetering';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Multi Controller While Metering';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'AF point selection',
        ),
    );

}
