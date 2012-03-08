<?php

namespace PHPExiftool\Driver\Tag\Leica;

class UserProfile extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'UserProfile';

    protected $FullName = 'mixed';

    protected $GroupName = 'Leica';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Leica';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'User Profile';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'User Profile 1',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'User Profile 2',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'User Profile 3',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'User Profile 0 (Dynamic)',
        ),
    );

}
