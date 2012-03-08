<?php

namespace PHPExiftool\Driver\Tag\Jpeg2000;

class Compression extends \PHPExiftool\Driver\Tag
{

    protected $Id = 11;

    protected $Name = 'Compression';

    protected $FullName = 'Jpeg2000::ImageHeader';

    protected $GroupName = 'Jpeg2000';

    protected $g0 = 'Jpeg2000';

    protected $g1 = 'Jpeg2000';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Compression';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Uncompressed',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Modified Huffman',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Modified READ',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Modified Modified READ',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'JBIG',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'JPEG',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'JPEG-LS',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'JPEG 2000',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'JBIG2',
        ),
    );

}
