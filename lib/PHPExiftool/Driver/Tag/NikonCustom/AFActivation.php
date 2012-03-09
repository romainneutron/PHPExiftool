<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class AFActivation extends \PHPExiftool\Driver\Tag
{

    protected $Id = '2.1';

    protected $Name = 'AFActivation';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AF Activation';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Shutter/AF-On',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'AF-On Only',
        ),
    );

}
