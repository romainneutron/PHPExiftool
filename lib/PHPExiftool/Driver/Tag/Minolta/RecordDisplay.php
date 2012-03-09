<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class RecordDisplay extends \PHPExiftool\Driver\Tag
{

    protected $Id = 77;

    protected $Name = 'RecordDisplay';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Record Display';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto Rotate',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Horizontal',
        ),
    );

}
