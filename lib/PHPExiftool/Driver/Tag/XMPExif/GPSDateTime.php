<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class GPSDateTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'GPSTimeStamp';

    protected $Name = 'GPSDateTime';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'date';

    protected $Writable = true;

    protected $Description = 'GPS Date/Time';

    protected $local_g2 = 'Time';

}
