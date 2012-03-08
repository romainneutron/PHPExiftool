<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class BatteryLevel extends \PHPExiftool\Driver\Tag
{

    protected $Id = 96;

    protected $Name = 'BatteryLevel';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Battery Level';

    protected $Values = array(
        3 => array(
            'Id' => 3,
            'Label' => 'Very Low',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Low',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Half Full',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Sufficient Power Remaining',
        ),
    );

}
