<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class ExternalFlash extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4609;

    protected $Name = 'ExternalFlash';

    protected $FullName = 'Olympus::FocusInfo';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'External Flash';

    protected $Values = array(
        '0 0' => array(
            'Id' => '0 0',
            'Label' => 'Off',
        ),
        '1 0' => array(
            'Id' => '1 0',
            'Label' => 'On',
        ),
    );

}
