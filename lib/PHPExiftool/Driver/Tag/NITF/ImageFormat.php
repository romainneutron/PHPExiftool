<?php

namespace PHPExiftool\Driver\Tag\NITF;

class ImageFormat extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'ImageFormat';

    protected $FullName = 'JPEG::NITF';

    protected $GroupName = 'NITF';

    protected $g0 = 'APP6';

    protected $g1 = 'NITF';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Image Format';

    protected $Values = array(
        'B' => array(
            'Id' => 'B',
            'Label' => 'IMode B',
        ),
    );

}
