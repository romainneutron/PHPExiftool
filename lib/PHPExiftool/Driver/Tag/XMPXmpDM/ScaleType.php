<?php

namespace PHPExiftool\Driver\Tag\XMPXmpDM;

class ScaleType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'scaleType';

    protected $Name = 'ScaleType';

    protected $FullName = 'XMP::xmpDM';

    protected $GroupName = 'XMP-xmpDM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmpDM';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Scale Type';

    protected $Values = array(
        'Both' => array(
            'Id' => 'Both',
            'Label' => 'Both',
        ),
        'Major' => array(
            'Id' => 'Major',
            'Label' => 'Major',
        ),
        'Minor' => array(
            'Id' => 'Minor',
            'Label' => 'Minor',
        ),
        'Neither' => array(
            'Id' => 'Neither',
            'Label' => 'Neither',
        ),
    );

}
