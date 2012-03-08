<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class GPSLongitude extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'GPSLongitude';

    protected $Name = 'GPSLongitude';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'GPS Longitude';

    protected $local_g2 = 'Location';

}
