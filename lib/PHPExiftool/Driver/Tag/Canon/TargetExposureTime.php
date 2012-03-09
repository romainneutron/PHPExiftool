<?php

namespace PHPExiftool\Driver\Tag\Canon;

class TargetExposureTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = 5;

    protected $Name = 'TargetExposureTime';

    protected $FullName = 'Canon::ShotInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Target Exposure Time';

    protected $flag_Permanent = true;

}
