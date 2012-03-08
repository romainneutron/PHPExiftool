<?php

namespace PHPExiftool\Driver\Tag\MNG;

class AlphaCompression extends \PHPExiftool\Driver\Tag
{

    protected $Id = 13;

    protected $Name = 'AlphaCompression';

    protected $FullName = 'MNG::JNGHeader';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Alpha Compression';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'MNG Grayscale IDAT',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'JNG 8-bit Grayscale JDAA',
        ),
    );

}
