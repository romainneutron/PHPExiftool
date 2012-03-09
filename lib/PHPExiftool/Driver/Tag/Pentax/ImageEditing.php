<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class ImageEditing extends \PHPExiftool\Driver\Tag
{

    protected $Id = 50;

    protected $Name = 'ImageEditing';

    protected $FullName = 'Pentax::Main';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'undef';

    protected $Writable = true;

    protected $Description = 'Image Editing';

    protected $flag_Permanent = true;

    protected $Values = array(
        '0 0' => array(
            'Id' => '0 0',
            'Label' => 'None',
        ),
        '0 0 0 0' => array(
            'Id' => '0 0 0 0',
            'Label' => 'None',
        ),
        '0 0 0 4' => array(
            'Id' => '0 0 0 4',
            'Label' => 'Digital Filter',
        ),
        '1 0 0 0' => array(
            'Id' => '1 0 0 0',
            'Label' => 'Resized',
        ),
        '2 0 0 0' => array(
            'Id' => '2 0 0 0',
            'Label' => 'Cropped',
        ),
        '4 0 0 0' => array(
            'Id' => '4 0 0 0',
            'Label' => 'Digital Filter 4',
        ),
        '6 0 0 0' => array(
            'Id' => '6 0 0 0',
            'Label' => 'Digital Filter 6',
        ),
        '16 0 0 0' => array(
            'Id' => '16 0 0 0',
            'Label' => 'Frame Synthesis?',
        ),
    );

}
