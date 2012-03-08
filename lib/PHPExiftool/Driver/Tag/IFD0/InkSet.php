<?php

namespace PHPExiftool\Driver\Tag\IFD0;

class InkSet extends \PHPExiftool\Driver\Tag
{

    protected $Id = 332;

    protected $Name = 'InkSet';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'IFD0';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Ink Set';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'CMYK',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Not CMYK',
        ),
    );

}
