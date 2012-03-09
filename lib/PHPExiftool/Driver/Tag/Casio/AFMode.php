<?php

namespace PHPExiftool\Driver\Tag\Casio;

class AFMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12297;

    protected $Name = 'AFMode';

    protected $FullName = 'Casio::Type2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'AF Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Spot',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Multi',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Face Detection',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Tracking',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Intelligent',
        ),
    );

}
