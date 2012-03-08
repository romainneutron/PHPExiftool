<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class GPSLatitude extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'GPSLatitude';

    protected $Name = 'GPSLatitude';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'GPS Latitude';

    protected $local_g2 = 'Location';

}
