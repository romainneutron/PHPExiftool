<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class SerialNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'SerialNumber';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Serial Number';

    protected $local_g1 = 'ExifIFD';

}
