<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class CenterAFArea extends \PHPExiftool\Driver\Tag
{

    protected $Id = '15.1';

    protected $Name = 'CenterAFArea';

    protected $FullName = 'NikonCustom::SettingsD80';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Center AF Area';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal Zone',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Wide Zone',
        ),
    );

}
