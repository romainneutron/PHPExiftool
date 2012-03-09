<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class WBMediaImageSizeSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1800;

    protected $Name = 'WBMediaImageSizeSetting';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'WB Media Image Size Setting';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Rear LCD panel',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'LCD monitor',
        ),
    );

}
