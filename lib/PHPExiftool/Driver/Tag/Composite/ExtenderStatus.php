<?php

namespace PHPExiftool\Driver\Tag\Composite;

class ExtenderStatus extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'ExtenderStatus';

    protected $Name = 'ExtenderStatus';

    protected $FullName = 'Composite';

    protected $GroupName = 'Composite';

    protected $g0 = 'Composite';

    protected $g1 = 'Composite';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Extender Status';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Not attached',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Attached',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Removed',
        ),
    );

}
