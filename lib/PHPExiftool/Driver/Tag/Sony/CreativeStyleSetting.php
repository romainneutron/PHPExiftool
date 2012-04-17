<?php

namespace PHPExiftool\Driver\Tag\Sony;

class CreativeStyleSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 15;

    protected $Name = 'CreativeStyleSetting';

    protected $FullName = 'Sony::CameraSettings3';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Creative Style Setting';

    protected $flag_Permanent = true;

    protected $Values = array(
        16 => array(
            'Id' => 16,
            'Label' => 'Standard',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Vivid',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Portrait',
        ),
        80 => array(
            'Id' => 80,
            'Label' => 'Landscape',
        ),
        96 => array(
            'Id' => 96,
            'Label' => 'B&W',
        ),
        160 => array(
            'Id' => 160,
            'Label' => 'Sunset',
        ),
    );

}
