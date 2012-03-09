<?php

namespace PHPExiftool\Driver\Tag\Kodak;

class Macro extends \PHPExiftool\Driver\Tag
{

    protected $Id = 43;

    protected $Name = 'Macro';

    protected $FullName = 'Kodak::Type5';

    protected $GroupName = 'Kodak';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Kodak';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Macro';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'On',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Off',
        ),
    );

}
