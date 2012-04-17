<?php

namespace PHPExiftool\Driver\Tag\Sony;

class SmileShutter extends \PHPExiftool\Driver\Tag
{

    protected $Id = 49;

    protected $Name = 'SmileShutter';

    protected $FullName = 'Sony::CameraSettings3';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Smile Shutter';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'OFF',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'ON',
        ),
    );

}
