<?php

namespace PHPExiftool\Driver\Tag\QuickTime;

class Rating extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'rtng';

    protected $Name = 'Rating';

    protected $FullName = 'QuickTime::ItemList';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Rating';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'none',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Clean',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Explicit',
        ),
    );

}
