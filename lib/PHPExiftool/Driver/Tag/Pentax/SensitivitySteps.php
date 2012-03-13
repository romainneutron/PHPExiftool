<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class SensitivitySteps extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'SensitivitySteps';

    protected $FullName = 'mixed';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Sensitivity Steps';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '1 EV Steps',
        ),
        1 => array(
            'Id' => 2,
            'Label' => 'As EV Steps',
        ),
        2 => array(
            'Id' => 0,
            'Label' => '1 EV Steps',
        ),
        3 => array(
            'Id' => 1,
            'Label' => 'As EV Steps',
        ),
    );

}
