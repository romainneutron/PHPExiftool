<?php

namespace PHPExiftool\Driver\Tag\IFD0;

class YCbCrPositioning extends \PHPExiftool\Driver\Tag
{

    protected $Id = 531;

    protected $Name = 'YCbCrPositioning';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'IFD0';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Y Cb Cr Positioning';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Centered',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Co-sited',
        ),
    );

}
