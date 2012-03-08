<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class Rotation extends \PHPExiftool\Driver\Tag
{

    protected $Id = '17.2';

    protected $Name = 'Rotation';

    protected $FullName = 'Pentax::CameraSettings';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Rotation';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Horizontal (normal)',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Rotate 180',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Rotate 90 CW',
        ),
        96 => array(
            'Id' => 96,
            'Label' => 'Rotate 270 CW',
        ),
    );

}
