<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class FocusArea extends \PHPExiftool\Driver\Tag
{

    protected $Id = 49;

    protected $Name = 'FocusArea';

    protected $FullName = 'Minolta::CameraSettings';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Focus Area';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Wide Focus (normal)',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Spot Focus',
        ),
    );

}
