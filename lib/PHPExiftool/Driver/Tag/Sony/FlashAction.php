<?php

namespace PHPExiftool\Driver\Tag\Sony;

class FlashAction extends \PHPExiftool\Driver\Tag
{

    protected $Id = 135;

    protected $Name = 'FlashAction';

    protected $FullName = 'Sony::CameraSettings3';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Flash Action';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Did not fire',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Fired',
        ),
    );

}
