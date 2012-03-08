<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class InstantPlaybackSetup extends \PHPExiftool\Driver\Tag
{

    protected $Id = 62;

    protected $Name = 'InstantPlaybackSetup';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Instant Playback Setup';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Image and Information',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Image Only',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Image and Histogram',
        ),
    );

}
