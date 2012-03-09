<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class IntervalMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 38;

    protected $Name = 'IntervalMode';

    protected $FullName = 'Minolta::CameraSettings';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Interval Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Still Image',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Time-lapse Movie',
        ),
    );

}
