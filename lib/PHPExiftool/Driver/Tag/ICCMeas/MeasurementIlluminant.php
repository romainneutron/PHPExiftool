<?php

namespace PHPExiftool\Driver\Tag\ICCMeas;

class MeasurementIlluminant extends \PHPExiftool\Driver\Tag
{

    protected $Id = 32;

    protected $Name = 'MeasurementIlluminant';

    protected $FullName = 'ICC_Profile::Measurement';

    protected $GroupName = 'ICC-meas';

    protected $g0 = 'ICC_Profile';

    protected $g1 = 'ICC-meas';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Measurement Illuminant';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'D50',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'D65',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'D93',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'F2',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'D55',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'A',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Equi-Power (E)',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'F8',
        ),
    );

}
