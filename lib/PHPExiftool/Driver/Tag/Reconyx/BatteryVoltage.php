<?php

namespace PHPExiftool\Driver\Tag\Reconyx;

class BatteryVoltage extends \PHPExiftool\Driver\Tag
{

    protected $Id = 42;

    protected $Name = 'BatteryVoltage';

    protected $FullName = 'Reconyx::Main';

    protected $GroupName = 'Reconyx';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Reconyx';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Battery Voltage';

    protected $flag_Permanent = true;

}
