<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class ShutterReleaseNoCFCard extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'ShutterReleaseNoCFCard';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Shutter Release W/O CF Card';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Yes',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'No',
        ),
    );

}
