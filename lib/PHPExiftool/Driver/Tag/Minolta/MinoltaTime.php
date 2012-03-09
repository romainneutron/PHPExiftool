<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class MinoltaTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = 22;

    protected $Name = 'MinoltaTime';

    protected $FullName = 'Minolta::CameraSettings';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Minolta Time';

    protected $local_g2 = 'Time';

    protected $flag_Permanent = true;

}
