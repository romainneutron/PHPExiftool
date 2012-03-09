<?php

namespace PHPExiftool\Driver\Tag\NikonCapture;

class ActiveDLightingMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 37;

    protected $Name = 'ActiveD-LightingMode';

    protected $FullName = 'NikonCapture::Exposure';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Active D-Lighting Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unchanged',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Off',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Low',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Normal',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'High',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Extra High',
        ),
    );

}
