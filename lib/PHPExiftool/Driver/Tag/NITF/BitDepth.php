<?php

namespace PHPExiftool\Driver\Tag\NITF;

class BitDepth extends \PHPExiftool\Driver\Tag
{

    protected $Id = 8;

    protected $Name = 'BitDepth';

    protected $FullName = 'JPEG::NITF';

    protected $GroupName = 'NITF';

    protected $g0 = 'APP6';

    protected $g1 = 'NITF';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Bit Depth';

}
