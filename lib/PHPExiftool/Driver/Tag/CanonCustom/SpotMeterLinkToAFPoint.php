<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class SpotMeterLinkToAFPoint extends \PHPExiftool\Driver\Tag
{

    protected $Id = 263;

    protected $Name = 'SpotMeterLinkToAFPoint';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Spot Meter Link To AF Point';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Disable (use center AF point)',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Enable (use active AF point)',
        ),
    );

}
