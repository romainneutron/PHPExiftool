<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class CleanFaxData extends \PHPExiftool\Driver\Tag
{

    protected $Id = 327;

    protected $Name = 'CleanFaxData';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Clean Fax Data';

    protected $local_g1 = 'ExifIFD';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Clean',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Regenerated',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Unclean',
        ),
    );

}
