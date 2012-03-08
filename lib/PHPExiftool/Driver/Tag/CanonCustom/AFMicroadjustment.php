<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class AFMicroadjustment extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1287;

    protected $Name = 'AFMicroadjustment';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'AF Microadjustment';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Disable',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Adjust all by same amount',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Adjust by lens',
        ),
    );

}
