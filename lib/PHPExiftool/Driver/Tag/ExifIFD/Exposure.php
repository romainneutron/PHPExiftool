<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class Exposure extends \PHPExiftool\Driver\Tag
{

    protected $Id = 65105;

    protected $Name = 'Exposure';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Exposure';

    protected $local_g1 = 'ExifIFD';

    protected $flag_Avoid = true;

}
