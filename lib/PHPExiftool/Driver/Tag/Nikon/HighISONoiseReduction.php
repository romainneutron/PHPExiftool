<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class HighISONoiseReduction extends \PHPExiftool\Driver\Tag
{

    protected $Id = 177;

    protected $Name = 'HighISONoiseReduction';

    protected $FullName = 'Nikon::Main';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'High ISO Noise Reduction';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Minimal',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Low',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Normal',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'High',
        ),
    );

}
