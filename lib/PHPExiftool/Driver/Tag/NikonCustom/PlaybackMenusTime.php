<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class PlaybackMenusTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = '20.1';

    protected $Name = 'PlaybackMenusTime';

    protected $FullName = 'NikonCustom::SettingsD5000';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Playback Menus Time';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '8 s',
        ),
        32 => array(
            'Id' => 32,
            'Label' => '12 s',
        ),
        64 => array(
            'Id' => 64,
            'Label' => '20 s',
        ),
        96 => array(
            'Id' => 96,
            'Label' => '1 min',
        ),
        128 => array(
            'Id' => 128,
            'Label' => '10 min',
        ),
    );

}
