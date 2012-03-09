<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class Brightness extends \PHPExiftool\Driver\Tag
{

    protected $Id = 44;

    protected $Name = 'Brightness';

    protected $FullName = 'Minolta::CameraSettings';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Brightness';

    protected $flag_Permanent = true;

}
