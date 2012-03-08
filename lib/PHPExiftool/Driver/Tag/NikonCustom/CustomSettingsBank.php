<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class CustomSettingsBank extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0.1';

    protected $Name = 'CustomSettingsBank';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Custom Settings Bank';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'A',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'B',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'C',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'D',
        ),
    );

}
