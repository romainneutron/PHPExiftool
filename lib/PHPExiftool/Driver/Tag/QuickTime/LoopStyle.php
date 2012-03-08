<?php

namespace PHPExiftool\Driver\Tag\QuickTime;

class LoopStyle extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'LOOP';

    protected $Name = 'LoopStyle';

    protected $FullName = 'QuickTime::UserData';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Video';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Loop Style';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Normal',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Palindromic',
        ),
    );

}
