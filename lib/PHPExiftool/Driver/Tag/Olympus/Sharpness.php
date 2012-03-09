<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class Sharpness extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4111;

    protected $Name = 'Sharpness';

    protected $FullName = 'Olympus::Main';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Sharpness';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Hard',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Soft',
        ),
    );

}
