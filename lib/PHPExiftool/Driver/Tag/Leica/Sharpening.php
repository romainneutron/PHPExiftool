<?php

namespace PHPExiftool\Driver\Tag\Leica;

class Sharpening extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12299;

    protected $Name = 'Sharpening';

    protected $FullName = 'Panasonic::Subdir';

    protected $GroupName = 'Leica';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Leica';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Sharpening';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Low',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Normal',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Medium High',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'High',
        ),
    );

}
