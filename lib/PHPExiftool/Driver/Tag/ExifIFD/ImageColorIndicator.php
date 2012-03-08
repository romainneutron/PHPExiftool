<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class ImageColorIndicator extends \PHPExiftool\Driver\Tag
{

    protected $Id = 34023;

    protected $Name = 'ImageColorIndicator';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Image Color Indicator';

    protected $local_g1 = 'ExifIFD';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unspecified Image Color',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Specified Image Color',
        ),
    );

}
