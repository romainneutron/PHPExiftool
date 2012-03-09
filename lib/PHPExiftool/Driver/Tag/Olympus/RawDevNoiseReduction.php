<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class RawDevNoiseReduction extends \PHPExiftool\Driver\Tag
{

    protected $Id = 266;

    protected $Name = 'RawDevNoiseReduction';

    protected $FullName = 'mixed';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Raw Dev Noise Reduction';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Noise Reduction',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Noise Filter',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Noise Filter (ISO Boost)',
        ),
    );

}
