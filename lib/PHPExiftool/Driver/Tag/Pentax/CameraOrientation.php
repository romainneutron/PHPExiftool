<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class CameraOrientation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'CameraOrientation';

    protected $FullName = 'Pentax::ShotInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Camera Orientation';

    protected $Values = array(
        16 => array(
            'Id' => 16,
            'Label' => 'Horizontal (normal)',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Rotate 180',
        ),
        48 => array(
            'Id' => 48,
            'Label' => 'Rotate 90 CW',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Rotate 270 CW',
        ),
        80 => array(
            'Id' => 80,
            'Label' => 'Upwards',
        ),
        96 => array(
            'Id' => 96,
            'Label' => 'Downwards',
        ),
    );

}
