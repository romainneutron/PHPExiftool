<?php

namespace PHPExiftool\Driver\Tag\Composite;

class FlashType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'FlashType';

    protected $Name = 'FlashType';

    protected $FullName = 'Composite';

    protected $GroupName = 'Composite';

    protected $g0 = 'Composite';

    protected $g1 = 'Composite';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Flash Type';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Built-In Flash',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'External',
        ),
    );

}
