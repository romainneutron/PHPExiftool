<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class DistortionCorrection2 extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4113;

    protected $Name = 'DistortionCorrection2';

    protected $FullName = 'Olympus::ImageProcessing';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Distortion Correction 2';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
    );

}
