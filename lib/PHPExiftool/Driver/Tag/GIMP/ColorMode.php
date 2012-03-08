<?php

namespace PHPExiftool\Driver\Tag\GIMP;

class ColorMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 22;

    protected $Name = 'ColorMode';

    protected $FullName = 'GIMP::Header';

    protected $GroupName = 'GIMP';

    protected $g0 = 'GIMP';

    protected $g1 = 'GIMP';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Color Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'RGB Color',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Grayscale',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Indexed Color',
        ),
    );

}
