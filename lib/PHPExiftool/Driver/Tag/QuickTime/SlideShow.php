<?php

namespace PHPExiftool\Driver\Tag\QuickTime;

class SlideShow extends \PHPExiftool\Driver\Tag
{

    protected $Id = 6;

    protected $Name = 'SlideShow';

    protected $FullName = 'QuickTime::Video';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Video';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Slide Show';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Yes',
        ),
    );

}
