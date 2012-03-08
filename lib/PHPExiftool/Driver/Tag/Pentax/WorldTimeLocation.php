<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class WorldTimeLocation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'WorldTimeLocation';

    protected $FullName = 'mixed';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'mixed';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'World Time Location';

    protected $local_g2 = 'Time';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Hometown',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Destination',
        ),
    );

}
