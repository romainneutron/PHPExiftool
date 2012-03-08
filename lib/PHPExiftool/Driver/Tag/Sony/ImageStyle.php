<?php

namespace PHPExiftool\Driver\Tag\Sony;

class ImageStyle extends \PHPExiftool\Driver\Tag
{

    protected $Id = 45;

    protected $Name = 'ImageStyle';

    protected $FullName = 'Sony::CameraSettings';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Image Style';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Standard',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Vivid',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Adobe RGB',
        ),
        11 => array(
            'Id' => 11,
            'Label' => 'Neutral',
        ),
        129 => array(
            'Id' => 129,
            'Label' => 'StyleBox1',
        ),
        130 => array(
            'Id' => 130,
            'Label' => 'StyleBox2',
        ),
        131 => array(
            'Id' => 131,
            'Label' => 'StyleBox3',
        ),
    );

}
