<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class SceneType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 41729;

    protected $Name = 'SceneType';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'undef';

    protected $Writable = true;

    protected $Description = 'Scene Type';

    protected $local_g1 = 'ExifIFD';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Directly photographed',
        ),
    );

}
