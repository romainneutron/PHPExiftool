<?php

namespace PHPExiftool\Driver\Tag\Sony;

class SweepPanoramaSize extends \PHPExiftool\Driver\Tag
{

    protected $Id = 50;

    protected $Name = 'SweepPanoramaSize';

    protected $FullName = 'Sony::CameraSettings3';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Sweep Panorama Size';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Standard',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Wide',
        ),
    );

}
