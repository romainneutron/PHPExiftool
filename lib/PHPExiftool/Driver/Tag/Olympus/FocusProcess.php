<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class FocusProcess extends \PHPExiftool\Driver\Tag
{

    protected $Id = 770;

    protected $Name = 'FocusProcess';

    protected $FullName = 'Olympus::CameraSettings';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Focus Process';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'AF Not Used',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'AF Used',
        ),
    );

}
