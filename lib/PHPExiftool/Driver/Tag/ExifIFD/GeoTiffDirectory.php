<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class GeoTiffDirectory extends \PHPExiftool\Driver\Tag
{

    protected $Id = 34735;

    protected $Name = 'GeoTiffDirectory';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'binary';

    protected $Writable = false;

    protected $Description = 'Geo Tiff Directory';

    protected $local_g1 = 'ExifIFD';

}
