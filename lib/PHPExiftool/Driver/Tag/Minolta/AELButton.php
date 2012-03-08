<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class AELButton extends \PHPExiftool\Driver\Tag
{

    protected $Id = 69;

    protected $Name = 'AELButton';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'AEL Button';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Hold',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Toggle',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Spot Hold',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Spot Toggle',
        ),
    );

}
