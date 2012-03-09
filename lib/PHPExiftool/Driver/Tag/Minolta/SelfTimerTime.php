<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class SelfTimerTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = 31;

    protected $Name = 'SelfTimerTime';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Self Timer Time';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '10 s',
        ),
        4 => array(
            'Id' => 4,
            'Label' => '2 s',
        ),
    );

}
