<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class FocusModeSwitch extends \PHPExiftool\Driver\Tag
{

    protected $Id = 88;

    protected $Name = 'FocusModeSwitch';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Focus Mode Switch';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'AF',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'MF',
        ),
    );

}
