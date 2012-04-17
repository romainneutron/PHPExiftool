<?php

namespace PHPExiftool\Driver\Tag\Sony;

class FlashControl extends \PHPExiftool\Driver\Tag
{

    protected $Id = 33;

    protected $Name = 'FlashControl';

    protected $FullName = 'Sony::CameraSettings3';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Flash Control';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'ADI Flash',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Pre-flash TTL',
        ),
    );

}
