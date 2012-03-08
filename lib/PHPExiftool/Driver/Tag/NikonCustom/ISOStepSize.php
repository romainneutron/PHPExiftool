<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class ISOStepSize extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'ISOStepSize';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'ISO Step Size';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '1/3 EV',
        ),
        64 => array(
            'Id' => 64,
            'Label' => '1/2 EV',
        ),
        128 => array(
            'Id' => 128,
            'Label' => '1 EV',
        ),
    );

}
