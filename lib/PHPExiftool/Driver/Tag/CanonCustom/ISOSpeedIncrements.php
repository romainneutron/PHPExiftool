<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class ISOSpeedIncrements extends \PHPExiftool\Driver\Tag
{

    protected $Id = 258;

    protected $Name = 'ISOSpeedIncrements';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'ISO Speed Increments';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '1/3 Stop',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '1 Stop',
        ),
    );

}
