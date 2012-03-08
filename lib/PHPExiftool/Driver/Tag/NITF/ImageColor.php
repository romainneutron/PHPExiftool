<?php

namespace PHPExiftool\Driver\Tag\NITF;

class ImageColor extends \PHPExiftool\Driver\Tag
{

    protected $Id = 7;

    protected $Name = 'ImageColor';

    protected $FullName = 'JPEG::NITF';

    protected $GroupName = 'NITF';

    protected $g0 = 'APP6';

    protected $g1 = 'NITF';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Image Color';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Monochrome',
        ),
    );

}
