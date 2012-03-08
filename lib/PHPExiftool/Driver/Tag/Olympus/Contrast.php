<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class Contrast extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4137;

    protected $Name = 'Contrast';

    protected $FullName = 'Olympus::Main';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Contrast';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'High',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Normal',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Low',
        ),
    );

}
