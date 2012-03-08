<?php

namespace PHPExiftool\Driver\Tag\IFD0;

class GrayResponseUnit extends \PHPExiftool\Driver\Tag
{

    protected $Id = 290;

    protected $Name = 'GrayResponseUnit';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'IFD0';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Gray Response Unit';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => '0.1',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '0.001',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '0.0001',
        ),
        4 => array(
            'Id' => 4,
            'Label' => '1e-05',
        ),
        5 => array(
            'Id' => 5,
            'Label' => '1e-06',
        ),
    );

}
