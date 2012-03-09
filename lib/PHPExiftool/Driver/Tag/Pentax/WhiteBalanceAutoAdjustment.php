<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class WhiteBalanceAutoAdjustment extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'WhiteBalanceAutoAdjustment';

    protected $FullName = 'Pentax::AWBInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'White Balance Auto Adjustment';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
    );

}
