<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class QuickControlDialInMeter extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1795;

    protected $Name = 'QuickControlDialInMeter';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Quick Control Dial In Meter';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Exposure comp/Aperture',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'AF point selection',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'ISO speed',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'AF point selection swapped with Exposure comp',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'ISO speed swapped with Exposure comp',
        ),
    );

}
