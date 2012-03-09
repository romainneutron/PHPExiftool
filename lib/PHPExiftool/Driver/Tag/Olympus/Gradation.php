<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class Gradation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1295;

    protected $Name = 'Gradation';

    protected $FullName = 'Olympus::CameraSettings';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Gradation';

    protected $flag_Permanent = true;

    protected $Values = array(
        '-1 -1 1' => array(
            'Id' => '-1 -1 1',
            'Label' => 'Low Key',
        ),
        '0 -1 1' => array(
            'Id' => '0 -1 1',
            'Label' => 'Normal',
        ),
        '1 -1 1' => array(
            'Id' => '1 -1 1',
            'Label' => 'High Key',
        ),
    );

}
