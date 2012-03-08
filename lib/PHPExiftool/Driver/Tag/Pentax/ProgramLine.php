<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class ProgramLine extends \PHPExiftool\Driver\Tag
{

    protected $Id = '1.1';

    protected $Name = 'ProgramLine';

    protected $FullName = 'Pentax::CameraSettings';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Program Line';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Hi Speed',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Depth',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'MTF',
        ),
    );

}
