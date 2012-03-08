<?php

namespace PHPExiftool\Driver\Tag\XMPXmpDM;

class VideoColorSpace extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'videoColorSpace';

    protected $Name = 'VideoColorSpace';

    protected $FullName = 'XMP::xmpDM';

    protected $GroupName = 'XMP-xmpDM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmpDM';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Video Color Space';

    protected $Values = array(
        'CCIR-601' => array(
            'Id' => 'CCIR-601',
            'Label' => 'CCIR-601',
        ),
        'CCIR-709' => array(
            'Id' => 'CCIR-709',
            'Label' => 'CCIR-709',
        ),
        'sRGB' => array(
            'Id' => 'sRGB',
            'Label' => 'sRGB',
        ),
    );

}
