<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class MultiExposureMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'MultiExposureMode';

    protected $FullName = 'Nikon::MultiExposure';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Multi Exposure Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Multiple Exposure',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Image Overlay',
        ),
    );

}
