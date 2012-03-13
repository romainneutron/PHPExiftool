<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class CommandDialsMenuAndPlayback extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'CommandDialsMenuAndPlayback';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Command Dials Menu And Playback';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 16,
            'Label' => 'On',
        ),
        2 => array(
            'Id' => 0,
            'Label' => 'On',
        ),
        3 => array(
            'Id' => 8,
            'Label' => 'Off',
        ),
        4 => array(
            'Id' => 16,
            'Label' => 'On (Image Review Exclude)',
        ),
    );

}
