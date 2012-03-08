<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class GPSAltitudeRef extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'GPSAltitudeRef';

    protected $Name = 'GPSAltitudeRef';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'GPS Altitude Ref';

    protected $local_g2 = 'Location';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Above Sea Level',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Below Sea Level',
        ),
    );

}
