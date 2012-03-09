<?php

namespace PHPExiftool\Driver\Tag\Sony;

class AutoHDR extends \PHPExiftool\Driver\Tag
{

    protected $Id = 45;

    protected $Name = 'AutoHDR';

    protected $FullName = 'Sony::CameraSettings3';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Auto HDR';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Off',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'On (Auto)',
        ),
        17 => array(
            'Id' => 17,
            'Label' => 'On (Manual)',
        ),
    );

}
