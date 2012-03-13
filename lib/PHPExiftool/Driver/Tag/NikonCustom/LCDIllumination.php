<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class LCDIllumination extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'LCDIllumination';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'LCD Illumination';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 8,
            'Label' => 'On',
        ),
        2 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        3 => array(
            'Id' => 32,
            'Label' => 'On',
        ),
        4 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        5 => array(
            'Id' => 32,
            'Label' => 'On',
        ),
    );

}
