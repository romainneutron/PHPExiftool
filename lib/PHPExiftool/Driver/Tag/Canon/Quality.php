<?php

namespace PHPExiftool\Driver\Tag\Canon;

class Quality extends \PHPExiftool\Driver\Tag
{

    protected $Id = 3;

    protected $Name = 'Quality';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Quality';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Economy',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Normal',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Fine',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'RAW',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Superfine',
        ),
        130 => array(
            'Id' => 130,
            'Label' => 'Normal Movie',
        ),
    );

}
