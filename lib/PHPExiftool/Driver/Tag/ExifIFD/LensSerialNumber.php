<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class LensSerialNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 42037;

    protected $Name = 'LensSerialNumber';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Lens Serial Number';

    protected $local_g1 = 'ExifIFD';

}
