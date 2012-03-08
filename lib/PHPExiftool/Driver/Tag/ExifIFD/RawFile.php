<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class RawFile extends \PHPExiftool\Driver\Tag
{

    protected $Id = 65100;

    protected $Name = 'RawFile';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Raw File';

    protected $local_g1 = 'ExifIFD';

}
