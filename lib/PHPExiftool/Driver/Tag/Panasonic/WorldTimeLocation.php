<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class WorldTimeLocation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 58;

    protected $Name = 'WorldTimeLocation';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'World Time Location';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Home',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Destination',
        ),
    );

}
