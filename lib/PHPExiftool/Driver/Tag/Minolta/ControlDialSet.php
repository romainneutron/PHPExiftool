<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class ControlDialSet extends \PHPExiftool\Driver\Tag
{

    protected $Id = 70;

    protected $Name = 'ControlDialSet';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Control Dial Set';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Shutter Speed',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Aperture',
        ),
    );

}
