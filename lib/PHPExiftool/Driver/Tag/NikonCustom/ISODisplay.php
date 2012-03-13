<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class ISODisplay extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'ISODisplay';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'ISO Display';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'On',
        ),
        1 => array(
            'Id' => 8,
            'Label' => 'Off',
        ),
        2 => array(
            'Id' => 0,
            'Label' => 'Show ISO/Easy ISO',
        ),
        3 => array(
            'Id' => 4,
            'Label' => 'Show ISO Sensitivity',
        ),
        4 => array(
            'Id' => 12,
            'Label' => 'Show Frame Count',
        ),
        5 => array(
            'Id' => 0,
            'Label' => 'Show ISO/Easy ISO',
        ),
        6 => array(
            'Id' => 4,
            'Label' => 'Show ISO Sensitivity',
        ),
        7 => array(
            'Id' => 12,
            'Label' => 'Show Frame Count',
        ),
    );

}
