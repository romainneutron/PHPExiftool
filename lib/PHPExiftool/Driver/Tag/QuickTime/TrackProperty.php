<?php

namespace PHPExiftool\Driver\Tag\QuickTime;

class TrackProperty extends \PHPExiftool\Driver\Tag
{

    protected $Id = 10;

    protected $Name = 'TrackProperty';

    protected $FullName = 'QuickTime::MetaData';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Track Property';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No presentation',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Main track',
        ),
    );

}
