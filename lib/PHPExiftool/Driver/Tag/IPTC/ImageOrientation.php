<?php

namespace PHPExiftool\Driver\Tag\IPTC;

class ImageOrientation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 131;

    protected $Name = 'ImageOrientation';

    protected $FullName = 'IPTC::ApplicationRecord';

    protected $GroupName = 'IPTC';

    protected $g0 = 'IPTC';

    protected $g1 = 'IPTC';

    protected $g2 = 'Other';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Image Orientation';

    protected $local_g2 = 'Image';

    protected $Values = array(
        'L' => array(
            'Id' => 'L',
            'Label' => 'Landscape',
        ),
        'P' => array(
            'Id' => 'P',
            'Label' => 'Portrait',
        ),
        'S' => array(
            'Id' => 'S',
            'Label' => 'Square',
        ),
    );

}
