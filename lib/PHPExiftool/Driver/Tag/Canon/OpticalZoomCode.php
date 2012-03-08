<?php

namespace PHPExiftool\Driver\Tag\Canon;

class OpticalZoomCode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 10;

    protected $Name = 'OpticalZoomCode';

    protected $FullName = 'Canon::ShotInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Optical Zoom Code';

    protected $local_g2 = 'Camera';

}
