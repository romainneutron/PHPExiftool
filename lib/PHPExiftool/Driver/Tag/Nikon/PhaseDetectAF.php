<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class PhaseDetectAF extends \PHPExiftool\Driver\Tag
{

    protected $Id = 6;

    protected $Name = 'PhaseDetectAF';

    protected $FullName = 'Nikon::AFInfo2';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Phase Detect AF';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On (51-point)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'On (11-point)',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'On (39-point)',
        ),
    );

}
