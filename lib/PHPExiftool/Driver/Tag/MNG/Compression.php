<?php

namespace PHPExiftool\Driver\Tag\MNG;

class Compression extends \PHPExiftool\Driver\Tag
{

    protected $Id = 10;

    protected $Name = 'Compression';

    protected $FullName = 'mixed';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Compression';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Deflate/Inflate',
        ),
        1 => array(
            'Id' => 8,
            'Label' => 'Huffman-coded baseline JPEG',
        ),
    );

}
