<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class HighISONoiseReduction extends \PHPExiftool\Driver\Tag
{

    protected $Id = 113;

    protected $Name = 'HighISONoiseReduction';

    protected $FullName = 'Pentax::Main';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'High ISO Noise Reduction';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Weakest',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Weak',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Strong',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Medium',
        ),
        255 => array(
            'Id' => 255,
            'Label' => 'Auto',
        ),
    );

}
