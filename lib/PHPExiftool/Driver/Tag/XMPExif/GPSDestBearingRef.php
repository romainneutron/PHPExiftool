<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class GPSDestBearingRef extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'GPSDestBearingRef';

    protected $Name = 'GPSDestBearingRef';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'GPS Dest Bearing Ref';

    protected $local_g2 = 'Location';

    protected $Values = array(
        'M' => array(
            'Id' => 'M',
            'Label' => 'Magnetic North',
        ),
        'T' => array(
            'Id' => 'T',
            'Label' => 'True North',
        ),
    );

}
