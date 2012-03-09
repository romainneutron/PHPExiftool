<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class AFPointIllumination extends \PHPExiftool\Driver\Tag
{

    protected $Id = 10;

    protected $Name = 'AFPointIllumination';

    protected $FullName = 'CanonCustom::Functions1D';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AF Point Illumination';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'On',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Off',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'On without dimming',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Brighter',
        ),
    );

}
