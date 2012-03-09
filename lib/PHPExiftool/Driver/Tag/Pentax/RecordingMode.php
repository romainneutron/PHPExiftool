<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class RecordingMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'RecordingMode';

    protected $FullName = 'Pentax::Type2';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Recording Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Night Scene',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Manual',
        ),
    );

}
