<?php

namespace PHPExiftool\Driver\Tag\Sony;

class HighISONoiseReduction extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'HighISONoiseReduction';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'High ISO Noise Reduction';

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
            'Label' => 'High',
        ),
        256 => array(
            'Id' => 256,
            'Label' => 'Auto',
        ),
        65535 => array(
            'Id' => 65535,
            'Label' => 'n/a',
        ),
    );

}
