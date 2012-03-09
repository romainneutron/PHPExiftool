<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class InitialZoomLiveView extends \PHPExiftool\Driver\Tag
{

    protected $Id = '4.4';

    protected $Name = 'InitialZoomLiveView';

    protected $FullName = 'NikonCustom::SettingsD3';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Initial Zoom Live View';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Low Magnification',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Medium Magnification',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'High Magnification',
        ),
    );

}
