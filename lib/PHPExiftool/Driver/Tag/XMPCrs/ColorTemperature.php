<?php

namespace PHPExiftool\Driver\Tag\XMPCrs;

class ColorTemperature extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Temperature';

    protected $Name = 'ColorTemperature';

    protected $FullName = 'XMP::crs';

    protected $GroupName = 'XMP-crs';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-crs';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Color Temperature';

    protected $flag_Avoid = true;

}
