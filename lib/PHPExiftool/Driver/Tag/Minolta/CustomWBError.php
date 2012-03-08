<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class CustomWBError extends \PHPExiftool\Driver\Tag
{

    protected $Id = 55;

    protected $Name = 'CustomWBError';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Custom WB Error';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'OK',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Error',
        ),
    );

}
