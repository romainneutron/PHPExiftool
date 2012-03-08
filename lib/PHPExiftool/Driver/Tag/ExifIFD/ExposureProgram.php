<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class ExposureProgram extends \PHPExiftool\Driver\Tag
{

    protected $Id = 34850;

    protected $Name = 'ExposureProgram';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Exposure Program';

    protected $local_g1 = 'ExifIFD';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Not Defined',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Manual',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Program AE',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Aperture-priority AE',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Shutter speed priority AE',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Creative (Slow speed)',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Action (High speed)',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Portrait',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Landscape',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Bulb',
        ),
    );

}
