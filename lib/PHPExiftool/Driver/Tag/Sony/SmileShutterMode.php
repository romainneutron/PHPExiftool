<?php

namespace PHPExiftool\Driver\Tag\Sony;

class SmileShutterMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 39;

    protected $Name = 'SmileShutterMode';

    protected $FullName = 'Sony::CameraSettings3';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Smile Shutter Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        17 => array(
            'Id' => 17,
            'Label' => 'Slight Smile',
        ),
        18 => array(
            'Id' => 18,
            'Label' => 'Normal Smile',
        ),
        19 => array(
            'Id' => 19,
            'Label' => 'Big Smile',
        ),
    );

}
