<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class DefaultEraseOption extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2067;

    protected $Name = 'DefaultEraseOption';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Default Erase Option';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Cancel selected',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Erase selected',
        ),
    );

}
