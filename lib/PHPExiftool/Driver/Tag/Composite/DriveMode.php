<?php

namespace PHPExiftool\Driver\Tag\Composite;

class DriveMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'DriveMode';

    protected $Name = 'DriveMode';

    protected $FullName = 'Composite';

    protected $GroupName = 'Composite';

    protected $g0 = 'Composite';

    protected $g1 = 'Composite';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Drive Mode';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Continuous Shooting',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Self-timer Operation',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Single-frame Shooting',
        ),
    );

}
