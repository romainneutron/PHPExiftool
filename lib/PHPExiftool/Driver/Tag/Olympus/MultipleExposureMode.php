<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class MultipleExposureMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4124;

    protected $Name = 'MultipleExposureMode';

    protected $FullName = 'Olympus::ImageProcessing';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Multiple Exposure Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'On (2 frames)',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'On (3 frames)',
        ),
    );

}
