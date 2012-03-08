<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class Teleconverter extends \PHPExiftool\Driver\Tag
{

    protected $Id = 261;

    protected $Name = 'Teleconverter';

    protected $FullName = 'Minolta::Main';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Teleconverter';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        72 => array(
            'Id' => 72,
            'Label' => 'Minolta AF 2x APO (D)',
        ),
        80 => array(
            'Id' => 80,
            'Label' => 'Minolta AF 2x APO II',
        ),
        136 => array(
            'Id' => 136,
            'Label' => 'Minolta AF 1.4x APO (D)',
        ),
        144 => array(
            'Id' => 144,
            'Label' => 'Minolta AF 1.4x APO II',
        ),
    );

}
