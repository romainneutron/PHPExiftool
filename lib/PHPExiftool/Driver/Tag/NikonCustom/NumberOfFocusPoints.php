<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class NumberOfFocusPoints extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0.3';

    protected $Name = 'NumberOfFocusPoints';

    protected $FullName = 'NikonCustom::SettingsD7000';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Number Of Focus Points';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '39 Points',
        ),
        16 => array(
            'Id' => 16,
            'Label' => '11 Points',
        ),
    );

}
