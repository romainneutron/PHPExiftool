<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class SingleFrameBracketing extends \PHPExiftool\Driver\Tag
{

    protected $Id = 33;

    protected $Name = 'SingleFrameBracketing';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Single Frame Bracketing';

    protected $flag_Permanent = true;

    protected $Values = array(
        770 => array(
            'Id' => 770,
            'Label' => 'Low',
        ),
        1794 => array(
            'Id' => 1794,
            'Label' => 'High',
        ),
    );

}
