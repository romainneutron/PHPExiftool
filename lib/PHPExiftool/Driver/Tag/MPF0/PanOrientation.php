<?php

namespace PHPExiftool\Driver\Tag\MPF0;

class PanOrientation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 45569;

    protected $Name = 'PanOrientation';

    protected $FullName = 'MPF::Main';

    protected $GroupName = 'MPF0';

    protected $g0 = 'MPF';

    protected $g1 = 'MPF0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Pan Orientation';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '[unused]',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Start at top right',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Start at top left',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Start at bottom left',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Start at bottom right',
        ),
    );

}
