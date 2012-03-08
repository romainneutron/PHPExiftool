<?php

namespace PHPExiftool\Driver\Tag\ITC;

class ImageType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 5;

    protected $Name = 'ImageType';

    protected $FullName = 'ITC::Item';

    protected $GroupName = 'ITC';

    protected $g0 = 'ITC';

    protected $g1 = 'ITC';

    protected $g2 = 'Image';

    protected $Type = 'undef';

    protected $Writable = false;

    protected $Description = 'Image Type';

    protected $Values = array(
        '\x00\x00\x00\x0d' => array(
            'Id' => '\x00\x00\x00\x0d',
            'Label' => 'JPEG',
        ),
        'PNGf' => array(
            'Id' => 'PNGf',
            'Label' => 'PNG',
        ),
    );

}
