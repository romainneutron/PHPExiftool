<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class MaxAperture extends \PHPExiftool\Driver\Tag
{

    protected $Id = 23;

    protected $Name = 'MaxAperture';

    protected $FullName = 'Minolta::CameraSettings';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Max Aperture';

    protected $flag_Permanent = true;

}
