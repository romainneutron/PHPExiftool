<?php

namespace PHPExiftool\Driver\Tag\ICCMeas;

class MeasurementGeometry extends \PHPExiftool\Driver\Tag
{

    protected $Id = 24;

    protected $Name = 'MeasurementGeometry';

    protected $FullName = 'ICC_Profile::Measurement';

    protected $GroupName = 'ICC-meas';

    protected $g0 = 'ICC_Profile';

    protected $g1 = 'ICC-meas';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Measurement Geometry';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => '0/45 or 45/0',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '0/d or d/0',
        ),
    );

}
