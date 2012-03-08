<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class ExtraSamples extends \PHPExiftool\Driver\Tag
{

    protected $Id = 338;

    protected $Name = 'ExtraSamples';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Extra Samples';

    protected $local_g1 = 'ExifIFD';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unspecified',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Associated Alpha',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Unassociated Alpha',
        ),
    );

}
