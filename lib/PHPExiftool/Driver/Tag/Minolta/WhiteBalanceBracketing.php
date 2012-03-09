<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class WhiteBalanceBracketing extends \PHPExiftool\Driver\Tag
{

    protected $Id = 34;

    protected $Name = 'WhiteBalanceBracketing';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'White Balance Bracketing';

    protected $flag_Permanent = true;

    protected $Values = array(
        8 => array(
            'Id' => 8,
            'Label' => 'Low',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'High',
        ),
    );

}
