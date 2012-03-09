<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class DynamicRangeOptimizerSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 39;

    protected $Name = 'DynamicRangeOptimizerSetting';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Dynamic Range Optimizer Setting';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Standard',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Advanced',
        ),
    );

}
