<?php

namespace PHPExiftool\Driver\Tag\IFD0;

class FillOrder extends \PHPExiftool\Driver\Tag
{

    protected $Id = 266;

    protected $Name = 'FillOrder';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'IFD0';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Fill Order';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Normal',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Reversed',
        ),
    );

}
