<?php

namespace PHPExiftool\Driver\Tag\CanonRaw;

class ShutterReleaseTiming extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4113;

    protected $Name = 'ShutterReleaseTiming';

    protected $FullName = 'CanonRaw::Main';

    protected $GroupName = 'CanonRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonRaw';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Shutter Release Timing';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Priority on shutter',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Priority on focus',
        ),
    );

}
