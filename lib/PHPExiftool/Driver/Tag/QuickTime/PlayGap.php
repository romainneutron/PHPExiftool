<?php

namespace PHPExiftool\Driver\Tag\QuickTime;

class PlayGap extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'pgap';

    protected $Name = 'PlayGap';

    protected $FullName = 'QuickTime::ItemList';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Play Gap';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Insert Gap',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'No Gap',
        ),
    );

}
