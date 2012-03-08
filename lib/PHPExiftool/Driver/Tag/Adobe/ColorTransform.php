<?php

namespace PHPExiftool\Driver\Tag\Adobe;

class ColorTransform extends \PHPExiftool\Driver\Tag
{

    protected $Id = 3;

    protected $Name = 'ColorTransform';

    protected $FullName = 'JPEG::Adobe';

    protected $GroupName = 'Adobe';

    protected $g0 = 'APP14';

    protected $g1 = 'Adobe';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Color Transform';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unknown (RGB or CMYK)',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'YCbCr',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'YCCK',
        ),
    );

}
