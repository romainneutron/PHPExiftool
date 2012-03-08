<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class PictureFinish extends \PHPExiftool\Driver\Tag
{

    protected $Id = 113;

    protected $Name = 'PictureFinish';

    protected $FullName = 'Minolta::CameraSettings5D';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Picture Finish';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Natural',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Natural+',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Portrait',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Wind Scene',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Evening Scene',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Night Scene',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Night Portrait',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Monochrome',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Adobe RGB',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Adobe RGB (ICC)',
        ),
    );

}
