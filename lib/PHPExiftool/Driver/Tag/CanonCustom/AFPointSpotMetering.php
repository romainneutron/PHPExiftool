<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class AFPointSpotMetering extends \PHPExiftool\Driver\Tag
{

    protected $Id = 13;

    protected $Name = 'AFPointSpotMetering';

    protected $FullName = 'CanonCustom::Functions1D';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'No. AF Points/Spot Metering';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '45/Center AF point',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '11/Active AF point',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '11/Center AF point',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '9/Active AF point',
        ),
    );

}
