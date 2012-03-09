<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class ColorMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 50;

    protected $Name = 'ColorMode';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Color Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Natural',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Vivid',
        ),
    );

}
