<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class CenterFocusPoint extends \PHPExiftool\Driver\Tag
{

    protected $Id = '2.2';

    protected $Name = 'CenterFocusPoint';

    protected $FullName = 'NikonCustom::SettingsD90';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Center Focus Point';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal Zone',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Wide Zone',
        ),
    );

}
