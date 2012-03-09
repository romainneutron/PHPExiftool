<?php

namespace PHPExiftool\Driver\Tag\Sigma;

class ExposureMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 8;

    protected $Name = 'ExposureMode';

    protected $FullName = 'Sigma::Main';

    protected $GroupName = 'Sigma';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sigma';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Exposure Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        'A' => array(
            'Id' => 'A',
            'Label' => 'Aperture-priority AE',
        ),
        'M' => array(
            'Id' => 'M',
            'Label' => 'Manual',
        ),
        'P' => array(
            'Id' => 'P',
            'Label' => 'Program AE',
        ),
        'S' => array(
            'Id' => 'S',
            'Label' => 'Shutter speed priority AE',
        ),
    );

}
