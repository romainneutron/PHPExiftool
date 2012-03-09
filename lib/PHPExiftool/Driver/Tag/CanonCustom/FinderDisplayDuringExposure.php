<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class FinderDisplayDuringExposure extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'FinderDisplayDuringExposure';

    protected $FullName = 'CanonCustom::Functions1D';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Finder Display During Exposure';

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
