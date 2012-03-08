<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class RawDevWhiteBalance extends \PHPExiftool\Driver\Tag
{

    protected $Id = 257;

    protected $Name = 'RawDevWhiteBalance';

    protected $FullName = 'Olympus::RawDevelopment2';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Raw Dev White Balance';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Color Temperature',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Gray Point',
        ),
    );

}
