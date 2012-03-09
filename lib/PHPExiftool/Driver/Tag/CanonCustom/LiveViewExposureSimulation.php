<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class LiveViewExposureSimulation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2064;

    protected $Name = 'LiveViewExposureSimulation';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Live View Exposure Simulation';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Disable (LCD auto adjust)',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Enable (simulates exposure)',
        ),
    );

}
