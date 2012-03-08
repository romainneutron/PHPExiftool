<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class ExposureCompensationMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 71;

    protected $Name = 'ExposureCompensationMode';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Exposure Compensation Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Ambient and Flash',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Ambient Only',
        ),
    );

}
