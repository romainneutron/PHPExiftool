<?php

namespace PHPExiftool\Driver\Tag\QuickTime;

class Mute extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'player.movie.audio.mute';

    protected $Name = 'Mute';

    protected $FullName = 'QuickTime::Keys';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Other';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Mute';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
    );

}
