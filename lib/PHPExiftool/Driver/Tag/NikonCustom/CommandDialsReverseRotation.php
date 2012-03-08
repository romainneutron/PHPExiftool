<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class CommandDialsReverseRotation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'CommandDialsReverseRotation';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Command Dials Reverse Rotation';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Yes',
        ),
    );

}
