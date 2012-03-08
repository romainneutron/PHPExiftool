<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class JPEGProc extends \PHPExiftool\Driver\Tag
{

    protected $Id = 512;

    protected $Name = 'JPEGProc';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'JPEG Proc';

    protected $local_g1 = 'ExifIFD';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Baseline',
        ),
        14 => array(
            'Id' => 14,
            'Label' => 'Lossless',
        ),
    );

}
