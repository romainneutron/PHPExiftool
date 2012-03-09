<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class ShutterCurtainSync extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'ShutterCurtainSync';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Shutter Curtain Sync';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '1st-curtain sync',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '2nd-curtain sync',
        ),
    );

}
