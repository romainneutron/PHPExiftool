<?php

namespace PHPExiftool\Driver\Tag\File;

class Compression extends \PHPExiftool\Driver\Tag
{

    protected $Id = 16;

    protected $Name = 'Compression';

    protected $FullName = 'BMP::Main';

    protected $GroupName = 'File';

    protected $g0 = 'File';

    protected $g1 = 'File';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Compression';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '8-Bit RLE',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '4-Bit RLE',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Bitfields',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'JPEG',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'PNG',
        ),
    );

}
