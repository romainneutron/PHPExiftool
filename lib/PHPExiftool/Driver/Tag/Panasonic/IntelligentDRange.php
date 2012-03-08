<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class IntelligentDRange extends \PHPExiftool\Driver\Tag
{

    protected $Id = 121;

    protected $Name = 'IntelligentD-Range';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Intelligent D-Range';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Low',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Standard',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'High',
        ),
    );

}
