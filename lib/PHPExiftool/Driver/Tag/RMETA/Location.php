<?php

namespace PHPExiftool\Driver\Tag\RMETA;

class Location extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Location';

    protected $Name = 'Location';

    protected $FullName = 'Ricoh::RMETA';

    protected $GroupName = 'RMETA';

    protected $g0 = 'APP5';

    protected $g1 = 'RMETA';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Location';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Verge',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Gantry',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Central reservation',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Roundabout',
        ),
    );

}
