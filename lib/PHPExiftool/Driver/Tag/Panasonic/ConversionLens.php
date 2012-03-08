<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class ConversionLens extends \PHPExiftool\Driver\Tag
{

    protected $Id = 53;

    protected $Name = 'ConversionLens';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Conversion Lens';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Off',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Wide',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Telephoto',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Macro',
        ),
    );

}
