<?php

namespace PHPExiftool\Driver\Tag\Casio;

class PortraitRefiner extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12331;

    protected $Name = 'PortraitRefiner';

    protected $FullName = 'Casio::Type2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Portrait Refiner';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '+1',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '+2',
        ),
    );

}
