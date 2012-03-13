<?php

namespace PHPExiftool\Driver\Tag\Sony;

class ISOSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'ISOSetting';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'ISO Setting';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        254 => array(
            'Id' => 254,
            'Label' => 'n/a',
        ),
    );

}
