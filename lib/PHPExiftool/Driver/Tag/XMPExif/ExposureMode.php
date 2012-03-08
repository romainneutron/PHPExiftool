<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class ExposureMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'ExposureMode';

    protected $Name = 'ExposureMode';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Exposure Mode';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Manual',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Auto bracket',
        ),
    );

}
