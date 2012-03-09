<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class ManualFNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 7;

    protected $Name = 'ManualFNumber';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Manual F Number';

    protected $flag_Permanent = true;

}
