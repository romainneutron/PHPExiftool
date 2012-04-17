<?php

namespace PHPExiftool\Driver\Tag\Sony;

class LiveViewFocusMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 139;

    protected $Name = 'LiveViewFocusMode';

    protected $FullName = 'Sony::CameraSettings3';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Live View Focus Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'n/a',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'AF',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Manual',
        ),
    );

}
