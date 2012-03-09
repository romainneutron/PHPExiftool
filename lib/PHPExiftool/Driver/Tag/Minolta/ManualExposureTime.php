<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class ManualExposureTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = 6;

    protected $Name = 'ManualExposureTime';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Manual Exposure Time';

    protected $flag_Permanent = true;

}
