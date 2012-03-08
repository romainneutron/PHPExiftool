<?php

namespace PHPExiftool\Driver\Tag\XMPXmpDM;

class VideoPixelDepth extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'videoPixelDepth';

    protected $Name = 'VideoPixelDepth';

    protected $FullName = 'XMP::xmpDM';

    protected $GroupName = 'XMP-xmpDM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmpDM';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Video Pixel Depth';

    protected $Values = array(
        '16Int' => array(
            'Id' => '16Int',
            'Label' => '16-bit integer',
        ),
        '24Int' => array(
            'Id' => '24Int',
            'Label' => '24-bit integer',
        ),
        '32Float' => array(
            'Id' => '32Float',
            'Label' => '32-bit float',
        ),
        '32Int' => array(
            'Id' => '32Int',
            'Label' => '32-bit integer',
        ),
        '8Int' => array(
            'Id' => '8Int',
            'Label' => '8-bit integer',
        ),
        'Other' => array(
            'Id' => 'Other',
            'Label' => 'Other',
        ),
    );

}
