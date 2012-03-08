<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class GPSSpeedRef extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'GPSSpeedRef';

    protected $Name = 'GPSSpeedRef';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'GPS Speed Ref';

    protected $local_g2 = 'Location';

    protected $Values = array(
        'K' => array(
            'Id' => 'K',
            'Label' => 'km/h',
        ),
        'M' => array(
            'Id' => 'M',
            'Label' => 'mph',
        ),
        'N' => array(
            'Id' => 'N',
            'Label' => 'knots',
        ),
    );

}
