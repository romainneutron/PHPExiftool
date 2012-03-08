<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class OPIProxy extends \PHPExiftool\Driver\Tag
{

    protected $Id = 351;

    protected $Name = 'OPIProxy';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'OPI Proxy';

    protected $local_g1 = 'ExifIFD';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Higher resolution image does not exist',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Higher resolution image exists',
        ),
    );

}
