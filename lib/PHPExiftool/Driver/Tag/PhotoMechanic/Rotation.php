<?php

namespace PHPExiftool\Driver\Tag\PhotoMechanic;

class Rotation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 216;

    protected $Name = 'Rotation';

    protected $FullName = 'PhotoMechanic::SoftEdit';

    protected $GroupName = 'PhotoMechanic';

    protected $g0 = 'PhotoMechanic';

    protected $g1 = 'PhotoMechanic';

    protected $g2 = 'Image';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Rotation';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 0,
        ),
        1 => array(
            'Id' => 1,
            'Label' => 90,
        ),
        2 => array(
            'Id' => 2,
            'Label' => 180,
        ),
        3 => array(
            'Id' => 3,
            'Label' => 270,
        ),
    );

}
