<?php

namespace PHPExiftool\Driver\Tag\XMPXmpDM;

class VideoAlphaMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'videoAlphaMode';

    protected $Name = 'VideoAlphaMode';

    protected $FullName = 'XMP::xmpDM';

    protected $GroupName = 'XMP-xmpDM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmpDM';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Video Alpha Mode';

    protected $Values = array(
        'none' => array(
            'Id' => 'none',
            'Label' => 'None',
        ),
        'pre-multiplied' => array(
            'Id' => 'pre-multiplied',
            'Label' => 'Pre-multiplied',
        ),
        'straight' => array(
            'Id' => 'straight',
            'Label' => 'Straight',
        ),
    );

}
