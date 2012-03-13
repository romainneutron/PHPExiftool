<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class EVStepSize extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'EVStepSize';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'EV Step Size';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '1/3 EV',
        ),
        1 => array(
            'Id' => 64,
            'Label' => '1/2 EV',
        ),
        2 => array(
            'Id' => 0,
            'Label' => '1/3 EV',
        ),
        3 => array(
            'Id' => 1,
            'Label' => '1/2 EV',
        ),
    );

}
