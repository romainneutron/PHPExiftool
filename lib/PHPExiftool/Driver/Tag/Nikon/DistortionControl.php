<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class DistortionControl extends \PHPExiftool\Driver\Tag
{

    protected $Id = 16;

    protected $Name = 'DistortionControl';

    protected $FullName = 'Nikon::ShotInfo';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Distortion Control';

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
