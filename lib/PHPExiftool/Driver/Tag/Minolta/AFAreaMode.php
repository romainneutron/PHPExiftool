<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class AFAreaMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 14;

    protected $Name = 'AFAreaMode';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'AF Area Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Wide',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Local',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Spot',
        ),
    );

}
