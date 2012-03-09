<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class BaseExposureCompensation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 21;

    protected $Name = 'BaseExposureCompensation';

    protected $FullName = 'Pentax::CameraSettings';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Base Exposure Compensation';

    protected $flag_Permanent = true;

}
