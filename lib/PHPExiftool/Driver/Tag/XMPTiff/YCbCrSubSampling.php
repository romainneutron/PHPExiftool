<?php

namespace PHPExiftool\Driver\Tag\XMPTiff;

class YCbCrSubSampling extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'YCbCrSubSampling';

    protected $Name = 'YCbCrSubSampling';

    protected $FullName = 'XMP::tiff';

    protected $GroupName = 'XMP-tiff';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-tiff';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Y Cb Cr Sub Sampling';

    protected $Values = array(
        '1 1' => array(
            'Id' => '1 1',
            'Label' => 'YCbCr4:4:4 (1 1)',
        ),
        '1 2' => array(
            'Id' => '1 2',
            'Label' => 'YCbCr4:4:0 (1 2)',
        ),
        '1 4' => array(
            'Id' => '1 4',
            'Label' => 'YCbCr4:4:1 (1 4)',
        ),
        '2 1' => array(
            'Id' => '2 1',
            'Label' => 'YCbCr4:2:2 (2 1)',
        ),
        '2 2' => array(
            'Id' => '2 2',
            'Label' => 'YCbCr4:2:0 (2 2)',
        ),
        '2 4' => array(
            'Id' => '2 4',
            'Label' => 'YCbCr4:2:1 (2 4)',
        ),
        '4 1' => array(
            'Id' => '4 1',
            'Label' => 'YCbCr4:1:1 (4 1)',
        ),
        '4 2' => array(
            'Id' => '4 2',
            'Label' => 'YCbCr4:1:0 (4 2)',
        ),
    );

}
