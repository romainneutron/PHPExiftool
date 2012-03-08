<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class AFPoints extends \PHPExiftool\Driver\Tag
{

    protected $Id = 16;

    protected $Name = 'AFPoints';

    protected $FullName = 'Minolta::CameraSettings7D';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'AF Points';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Center',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Top',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Top-Right',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Right',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Bottom-Right',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Bottom',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Bottom-Left',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Left',
        ),
        256 => array(
            'Id' => 256,
            'Label' => 'Top-Left',
        ),
    );

}
