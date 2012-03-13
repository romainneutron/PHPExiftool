<?php

namespace PHPExiftool\Driver\Tag\Sony;

class MultiFrameNoiseReduction extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'MultiFrameNoiseReduction';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Multi Frame Noise Reduction';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Off',
        ),
        2 => array(
            'Id' => 16,
            'Label' => 'On',
        ),
        3 => array(
            'Id' => 255,
            'Label' => 'n/a',
        ),
        4 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        5 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
        6 => array(
            'Id' => 255,
            'Label' => 'n/a',
        ),
    );

}
