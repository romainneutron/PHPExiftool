<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class AIServoTrackingMethod extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1284;

    protected $Name = 'AIServoTrackingMethod';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'AI Servo Tracking Method';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Main focus point priority',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Continuous AF track priority',
        ),
    );

}
