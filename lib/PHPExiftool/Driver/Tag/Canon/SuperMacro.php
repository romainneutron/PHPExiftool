<?php

namespace PHPExiftool\Driver\Tag\Canon;

class SuperMacro extends \PHPExiftool\Driver\Tag
{

    protected $Id = 26;

    protected $Name = 'SuperMacro';

    protected $FullName = 'Canon::Main';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Super Macro';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On (1)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'On (2)',
        ),
    );

}
