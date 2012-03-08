<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class ImageQuality2 extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1539;

    protected $Name = 'ImageQuality2';

    protected $FullName = 'Olympus::CameraSettings';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Image Quality 2';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'SQ',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'HQ',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'SHQ',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'RAW',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'SQ (5)',
        ),
    );

}
