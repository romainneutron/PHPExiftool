<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class PrioritySetupShutterRelease extends \PHPExiftool\Driver\Tag
{

    protected $Id = 29;

    protected $Name = 'PrioritySetupShutterRelease';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Priority Setup Shutter Release';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'AF',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Release',
        ),
    );

}
