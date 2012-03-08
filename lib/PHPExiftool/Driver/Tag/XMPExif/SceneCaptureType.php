<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class SceneCaptureType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'SceneCaptureType';

    protected $Name = 'SceneCaptureType';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Scene Capture Type';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Standard',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Landscape',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Portrait',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Night',
        ),
    );

}
