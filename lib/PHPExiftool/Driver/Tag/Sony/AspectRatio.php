<?php

namespace PHPExiftool\Driver\Tag\Sony;

class AspectRatio extends \PHPExiftool\Driver\Tag
{

    protected $Id = 85;

    protected $Name = 'AspectRatio';

    protected $FullName = 'Sony::CameraSettings';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Aspect Ratio';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => '3:2',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '16:9',
        ),
    );

}
