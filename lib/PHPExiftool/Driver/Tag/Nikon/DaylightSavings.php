<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class DaylightSavings extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'DaylightSavings';

    protected $FullName = 'Nikon::WorldTime';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Time';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Daylight Savings';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Yes',
        ),
    );

}
