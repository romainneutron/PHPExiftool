<?php

namespace PHPExiftool\Driver\Tag\SigmaRaw;

class ExposureProgram extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'PMODE';

    protected $Name = 'ExposureProgram';

    protected $FullName = 'SigmaRaw::Properties';

    protected $GroupName = 'SigmaRaw';

    protected $g0 = 'SigmaRaw';

    protected $g1 = 'SigmaRaw';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Exposure Program';

    protected $Values = array(
        'A' => array(
            'Id' => 'A',
            'Label' => 'Aperture Priority',
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
