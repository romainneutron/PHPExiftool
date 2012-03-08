<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class EDialInProgram extends \PHPExiftool\Driver\Tag
{

    protected $Id = '1.3';

    protected $Name = 'E-DialInProgram';

    protected $FullName = 'Pentax::CameraSettings';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'E-Dial In Program';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Tv or Av',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'P Shift',
        ),
    );

}
