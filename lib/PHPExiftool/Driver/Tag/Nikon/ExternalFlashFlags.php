<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class ExternalFlashFlags extends \PHPExiftool\Driver\Tag
{

    protected $Id = 8;

    protected $Name = 'ExternalFlashFlags';

    protected $FullName = 'mixed';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'External Flash Flags';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Fired',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Bounce Flash',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Wide Flash Adapter',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Dome Diffuser',
        ),
    );

}
