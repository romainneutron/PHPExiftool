<?php

namespace PHPExiftool\Driver\Tag\Sony;

class RedEyeReduction extends \PHPExiftool\Driver\Tag
{

    protected $Id = 40;

    protected $Name = 'RedEyeReduction';

    protected $FullName = 'Sony::CameraSettings3';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Red Eye Reduction';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Off',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'On',
        ),
    );

}
