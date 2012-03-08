<?php

namespace PHPExiftool\Driver\Tag\H264;

class ImageStabilization extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'ImageStabilization';

    protected $FullName = 'H264::Camera2';

    protected $GroupName = 'H264';

    protected $g0 = 'H264';

    protected $g1 = 'H264';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Image Stabilization';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        255 => array(
            'Id' => 255,
            'Label' => 'n/a',
        ),
    );

}
