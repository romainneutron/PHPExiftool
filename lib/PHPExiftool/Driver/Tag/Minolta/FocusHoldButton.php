<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class FocusHoldButton extends \PHPExiftool\Driver\Tag
{

    protected $Id = 68;

    protected $Name = 'FocusHoldButton';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Focus Hold Button';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Focus Hold',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'DOF Preview',
        ),
    );

}
