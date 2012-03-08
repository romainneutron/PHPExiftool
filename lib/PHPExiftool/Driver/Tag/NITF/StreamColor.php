<?php

namespace PHPExiftool\Driver\Tag\NITF;

class StreamColor extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12;

    protected $Name = 'StreamColor';

    protected $FullName = 'JPEG::NITF';

    protected $GroupName = 'NITF';

    protected $g0 = 'APP6';

    protected $g1 = 'NITF';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Stream Color';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Monochrome',
        ),
    );

}
