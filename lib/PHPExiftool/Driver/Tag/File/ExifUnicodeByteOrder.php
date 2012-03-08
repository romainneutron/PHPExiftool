<?php

namespace PHPExiftool\Driver\Tag\File;

class ExifUnicodeByteOrder extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'ExifUnicodeByteOrder';

    protected $Name = 'ExifUnicodeByteOrder';

    protected $FullName = 'Extra';

    protected $GroupName = 'File';

    protected $g0 = 'File';

    protected $g1 = 'File';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = true;

    protected $Description = 'Exif Unicode Byte Order';

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
