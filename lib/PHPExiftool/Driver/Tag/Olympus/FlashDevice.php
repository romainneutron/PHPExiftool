<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class FlashDevice extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4101;

    protected $Name = 'FlashDevice';

    protected $FullName = 'Olympus::Main';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Flash Device';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Internal',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'External',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Internal + External',
        ),
    );

}
