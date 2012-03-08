<?php

namespace PHPExiftool\Driver\Tag\Canon;

class CameraISO extends \PHPExiftool\Driver\Tag
{

    protected $Id = 16;

    protected $Name = 'CameraISO';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Camera ISO';

}
