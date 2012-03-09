<?php

namespace PHPExiftool\Driver\Tag\Canon;

class PanoramaFrameNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'PanoramaFrameNumber';

    protected $FullName = 'Canon::Panorama';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Panorama Frame Number';

    protected $flag_Permanent = true;

}
