<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class Indexed extends \PHPExiftool\Driver\Tag
{

    protected $Id = 346;

    protected $Name = 'Indexed';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Indexed';

    protected $local_g1 = 'ExifIFD';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Not indexed',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Indexed',
        ),
    );

}
