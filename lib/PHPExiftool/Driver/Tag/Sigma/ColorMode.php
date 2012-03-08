<?php

namespace PHPExiftool\Driver\Tag\Sigma;

class ColorMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 44;

    protected $Name = 'ColorMode';

    protected $FullName = 'Sigma::Main';

    protected $GroupName = 'Sigma';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sigma';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Color Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'n/a',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Sepia',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'B&W',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Standard',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Vivid',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Neutral',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Portrait',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Landscape',
        ),
    );

}
