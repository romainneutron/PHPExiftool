<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class ProfileType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 401;

    protected $Name = 'ProfileType';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Profile Type';

    protected $local_g1 = 'ExifIFD';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unspecified',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Group 3 FAX',
        ),
    );

}
