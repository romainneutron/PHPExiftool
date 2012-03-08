<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class ExposureCompStepSize extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'ExposureCompStepSize';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Exposure Comp Step Size';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '1/3 EV',
        ),
        4 => array(
            'Id' => 4,
            'Label' => '1/2 EV',
        ),
        8 => array(
            'Id' => 8,
            'Label' => '1 EV',
        ),
    );

}
