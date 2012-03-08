<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class GPSTrackRef extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'GPSTrackRef';

    protected $Name = 'GPSTrackRef';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'GPS Track Ref';

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
