<?php

namespace PHPExiftool\Driver\Tag\NITF;

class ImageClass extends \PHPExiftool\Driver\Tag
{

    protected $Id = 9;

    protected $Name = 'ImageClass';

    protected $FullName = 'JPEG::NITF';

    protected $GroupName = 'NITF';

    protected $g0 = 'APP6';

    protected $g1 = 'NITF';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Image Class';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'General Purpose',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Tactical Imagery',
        ),
    );

}
