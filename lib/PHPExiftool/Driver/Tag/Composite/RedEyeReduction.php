<?php

namespace PHPExiftool\Driver\Tag\Composite;

class RedEyeReduction extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'RedEyeReduction';

    protected $Name = 'RedEyeReduction';

    protected $FullName = 'Composite';

    protected $GroupName = 'Composite';

    protected $g0 = 'Composite';

    protected $g1 = 'Composite';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Red Eye Reduction';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
    );

}
