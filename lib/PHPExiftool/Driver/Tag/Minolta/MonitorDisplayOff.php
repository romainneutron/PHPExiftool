<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class MonitorDisplayOff extends \PHPExiftool\Driver\Tag
{

    protected $Id = 76;

    protected $Name = 'MonitorDisplayOff';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Monitor Display Off';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Automatic',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Manual',
        ),
    );

}
