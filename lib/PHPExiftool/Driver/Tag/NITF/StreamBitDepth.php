<?php

namespace PHPExiftool\Driver\Tag\NITF;

class StreamBitDepth extends \PHPExiftool\Driver\Tag
{

    protected $Id = 13;

    protected $Name = 'StreamBitDepth';

    protected $FullName = 'JPEG::NITF';

    protected $GroupName = 'NITF';

    protected $g0 = 'APP6';

    protected $g1 = 'NITF';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Stream Bit Depth';

}
