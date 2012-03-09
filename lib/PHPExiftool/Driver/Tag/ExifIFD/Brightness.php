<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class Brightness extends \PHPExiftool\Driver\Tag
{

    protected $Id = 65107;

    protected $Name = 'Brightness';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Brightness';

    protected $local_g1 = 'ExifIFD';

    protected $flag_Avoid = true;

}
