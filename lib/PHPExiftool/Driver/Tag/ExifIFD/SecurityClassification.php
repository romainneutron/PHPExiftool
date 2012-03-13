<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class SecurityClassification extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'SecurityClassification';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'mixed';

    protected $Writable = 'mixed';

    protected $Description = 'Security Classification';

    protected $local_g1 = 'ExifIFD';

    protected $Values = array(
        'C' => array(
            'Id' => 'C',
            'Label' => 'Confidential',
        ),
        'R' => array(
            'Id' => 'R',
            'Label' => 'Restricted',
        ),
        'S' => array(
            'Id' => 'S',
            'Label' => 'Secret',
        ),
        'T' => array(
            'Id' => 'T',
            'Label' => 'Top Secret',
        ),
        'U' => array(
            'Id' => 'U',
            'Label' => 'Unclassified',
        ),
    );

}
