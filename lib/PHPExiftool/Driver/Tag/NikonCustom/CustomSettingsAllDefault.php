<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class CustomSettingsAllDefault extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0.2';

    protected $Name = 'CustomSettingsAllDefault';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Custom Settings All Default';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Yes',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'No',
        ),
    );

}
