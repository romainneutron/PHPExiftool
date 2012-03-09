<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class FlashExposureCompSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 16;

    protected $Name = 'FlashExposureCompSetting';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Flash Exposure Comp. Setting';

    protected $flag_Permanent = true;

}
