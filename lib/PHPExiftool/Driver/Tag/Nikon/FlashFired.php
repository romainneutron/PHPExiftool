<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class FlashFired extends \PHPExiftool\Driver\Tag
{

    protected $Id = '590.3';

    protected $Name = 'FlashFired';

    protected $FullName = 'Nikon::ShotInfoD80';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = true;

    protected $Description = 'Flash Fired';

    protected $Values = array(
        64 => array(
            'Id' => 64,
            'Label' => 'Internal',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'External',
        ),
    );

}
