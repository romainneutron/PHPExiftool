<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class USPTOOriginalContentType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 50560;

    protected $Name = 'USPTOOriginalContentType';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'USPTO Original Content Type';

    protected $local_g1 = 'ExifIFD';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Text or Drawing',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Grayscale',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Color',
        ),
    );

}
