<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class FlashType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4096;

    protected $Name = 'FlashType';

    protected $FullName = 'Olympus::Equipment';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Flash Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Simple E-System',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'E-System',
        ),
    );

}
