<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class ComponentsConfiguration extends \PHPExiftool\Driver\Tag
{

    protected $Id = 37121;

    protected $Name = 'ComponentsConfiguration';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'undef';

    protected $Writable = true;

    protected $Description = 'Components Configuration';

    protected $local_g1 = 'ExifIFD';

    protected $flag_Unsafe = true;

    protected $flag_Mandatory = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '-',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Y',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Cb',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Cr',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'R',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'G',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'B',
        ),
    );

}
