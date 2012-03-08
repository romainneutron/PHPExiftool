<?php

namespace PHPExiftool\Driver\Tag\Sony;

class ExposureLevelIncrements extends \PHPExiftool\Driver\Tag
{

    protected $Id = 88;

    protected $Name = 'ExposureLevelIncrements';

    protected $FullName = 'Sony::CameraSettings';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Exposure Level Increments';

    protected $Values = array(
        33 => array(
            'Id' => 33,
            'Label' => '1/3 EV',
        ),
        50 => array(
            'Id' => 50,
            'Label' => '1/2 EV',
        ),
    );

}
