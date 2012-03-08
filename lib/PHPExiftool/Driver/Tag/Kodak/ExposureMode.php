<?php

namespace PHPExiftool\Driver\Tag\Kodak;

class ExposureMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Exposure Mode';

    protected $Name = 'ExposureMode';

    protected $FullName = 'Kodak::TextualInfo';

    protected $GroupName = 'Kodak';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Kodak';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Exposure Mode';

    protected $Values = array(
        'A' => array(
            'Id' => 'A',
            'Label' => 'Aperture Priority',
        ),
        'B' => array(
            'Id' => 'B',
            'Label' => 'Bulb',
        ),
        'M' => array(
            'Id' => 'M',
            'Label' => 'Manual',
        ),
        'P' => array(
            'Id' => 'P',
            'Label' => 'Program',
        ),
        'S' => array(
            'Id' => 'S',
            'Label' => 'Shutter Priority',
        ),
    );

}
