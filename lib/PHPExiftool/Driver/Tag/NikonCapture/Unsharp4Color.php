<?php

namespace PHPExiftool\Driver\Tag\NikonCapture;

class Unsharp4Color extends \PHPExiftool\Driver\Tag
{

    protected $Id = 100;

    protected $Name = 'Unsharp4Color';

    protected $FullName = 'NikonCapture::UnsharpData';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Unsharp 4 Color';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'RGB',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Red',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Green',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Blue',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Yellow',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Magenta',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Cyan',
        ),
    );

}
