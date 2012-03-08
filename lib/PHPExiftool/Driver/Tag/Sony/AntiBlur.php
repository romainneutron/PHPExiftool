<?php

namespace PHPExiftool\Driver\Tag\Sony;

class AntiBlur extends \PHPExiftool\Driver\Tag
{

    protected $Id = 45131;

    protected $Name = 'Anti-Blur';

    protected $FullName = 'Sony::Main';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Anti-Blur';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On (Continuous)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'On (Shooting)',
        ),
        65535 => array(
            'Id' => 65535,
            'Label' => 'n/a',
        ),
    );

}
