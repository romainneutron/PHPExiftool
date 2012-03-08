<?php

namespace PHPExiftool\Driver\Tag\RealPROP;

class Flags extends \PHPExiftool\Driver\Tag
{

    protected $Id = 10;

    protected $Name = 'Flags';

    protected $FullName = 'Real::Properties';

    protected $GroupName = 'Real-PROP';

    protected $g0 = 'Real';

    protected $g1 = 'Real-PROP';

    protected $g2 = 'Video';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Flags';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Allow Recording',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Perfect Play',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Live',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Allow Download',
        ),
    );

}
