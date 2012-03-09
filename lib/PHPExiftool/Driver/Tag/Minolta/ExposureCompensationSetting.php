<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class ExposureCompensationSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'ExposureCompensationSetting';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Exposure Compensation Setting';

    protected $flag_Permanent = true;

}
