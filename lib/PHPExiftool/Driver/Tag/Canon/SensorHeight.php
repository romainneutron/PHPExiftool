<?php

namespace PHPExiftool\Driver\Tag\Canon;

class SensorHeight extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'SensorHeight';

    protected $FullName = 'Canon::SensorInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = false;

    protected $Description = 'Sensor Height';

    protected $flag_Permanent = true;

}
