<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class LCDDisplayReturnToShoot extends \PHPExiftool\Driver\Tag
{

    protected $Id = 18;

    protected $Name = 'LCDDisplayReturnToShoot';

    protected $FullName = 'CanonCustom::Functions5D';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'LCD Display Return To Shoot';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'With Shutter Button only',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Also with * etc.',
        ),
    );

}
