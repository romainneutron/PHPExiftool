<?php

namespace PHPExiftool\Driver\Tag\Canon;

class ControlMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 18;

    protected $Name = 'ControlMode';

    protected $FullName = 'Canon::ShotInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Control Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'n/a',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Camera Local Control',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Computer Remote Control',
        ),
    );

}
