<?php

namespace PHPExiftool\Driver\Tag\XMPXmpDM;

class VideoFieldOrder extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'videoFieldOrder';

    protected $Name = 'VideoFieldOrder';

    protected $FullName = 'XMP::xmpDM';

    protected $GroupName = 'XMP-xmpDM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmpDM';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Video Field Order';

    protected $Values = array(
        'Lower' => array(
            'Id' => 'Lower',
            'Label' => 'Lower',
        ),
        'Progressive' => array(
            'Id' => 'Progressive',
            'Label' => 'Progressive',
        ),
        'Upper' => array(
            'Id' => 'Upper',
            'Label' => 'Upper',
        ),
    );

}
