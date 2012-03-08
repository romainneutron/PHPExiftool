<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class DateImprint extends \PHPExiftool\Driver\Tag
{

    protected $Id = '4.2';

    protected $Name = 'DateImprint';

    protected $FullName = 'NikonCustom::SettingsD5000';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Date Imprint';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'On',
        ),
    );

}
