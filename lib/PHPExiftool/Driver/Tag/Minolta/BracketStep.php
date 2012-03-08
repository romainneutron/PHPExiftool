<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class BracketStep extends \PHPExiftool\Driver\Tag
{

    protected $Id = 14;

    protected $Name = 'BracketStep';

    protected $FullName = 'Minolta::CameraSettings';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Bracket Step';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '1/3 EV',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '2/3 EV',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '1 EV',
        ),
    );

}
