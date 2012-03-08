<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class GPSMeasureMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'GPSMeasureMode';

    protected $Name = 'GPSMeasureMode';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'GPS Measure Mode';

    protected $local_g2 = 'Location';

    protected $Values = array(
        2 => array(
            'Id' => 2,
            'Label' => '2-Dimensional',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '3-Dimensional',
        ),
    );

}
