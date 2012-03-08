<?php

namespace PHPExiftool\Driver\Tag\RMETA;

class Condition extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Condition';

    protected $Name = 'Condition';

    protected $FullName = 'Ricoh::RMETA';

    protected $GroupName = 'RMETA';

    protected $g0 = 'APP5';

    protected $g1 = 'RMETA';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Condition';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Good',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Fair',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Poor',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Damaged',
        ),
    );

}
