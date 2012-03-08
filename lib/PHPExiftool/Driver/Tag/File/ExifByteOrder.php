<?php

namespace PHPExiftool\Driver\Tag\File;

class ExifByteOrder extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'ExifByteOrder';

    protected $Name = 'ExifByteOrder';

    protected $FullName = 'Extra';

    protected $GroupName = 'File';

    protected $g0 = 'File';

    protected $g1 = 'File';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = true;

    protected $Description = 'Exif Byte Order';

    protected $Values = array(
        'II' => array(
            'Id' => 'II',
            'Label' => 'Little-endian (Intel, II)',
        ),
        'MM' => array(
            'Id' => 'MM',
            'Label' => 'Big-endian (Motorola, MM)',
        ),
    );

}
