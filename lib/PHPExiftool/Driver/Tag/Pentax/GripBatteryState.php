<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class GripBatteryState extends \PHPExiftool\Driver\Tag
{

    protected $Id = '1.2';

    protected $Name = 'GripBatteryState';

    protected $FullName = 'Pentax::BatteryInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Grip Battery State';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Empty or Missing',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Almost Empty',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Running Low',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Full',
        ),
    );

    protected $Index = 'mixed';

}
