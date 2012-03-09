<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class LCDDisplayAtPowerOn extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'LCDDisplayAtPowerOn';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'LCD Display At Power On';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Display',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Retain power off status',
        ),
    );

}
