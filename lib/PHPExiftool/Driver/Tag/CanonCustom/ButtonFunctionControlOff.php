<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class ButtonFunctionControlOff extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1802;

    protected $Name = 'ButtonFunctionControlOff';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Button Function Control Off';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal (enable)',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Disable main, Control, Multi-control',
        ),
    );

}
