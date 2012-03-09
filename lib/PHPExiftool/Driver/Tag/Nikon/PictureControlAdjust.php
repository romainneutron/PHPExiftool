<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class PictureControlAdjust extends \PHPExiftool\Driver\Tag
{

    protected $Id = 48;

    protected $Name = 'PictureControlAdjust';

    protected $FullName = 'Nikon::PictureControl';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Picture Control Adjust';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Default Settings',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Quick Adjust',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Full Control',
        ),
    );

}
