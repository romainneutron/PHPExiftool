<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class BodyBatteryState extends \PHPExiftool\Driver\Tag
{

    protected $Id = '1.1';

    protected $Name = 'BodyBatteryState';

    protected $FullName = 'Pentax::BatteryInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Body Battery State';

    protected $flag_Permanent = true;

    protected $Values = 'mixed';

    protected $Index = 'mixed';

}
