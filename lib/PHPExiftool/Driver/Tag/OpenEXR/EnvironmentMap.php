<?php

namespace PHPExiftool\Driver\Tag\OpenEXR;

class EnvironmentMap extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'envmap';

    protected $Name = 'EnvironmentMap';

    protected $FullName = 'OpenEXR::Main';

    protected $GroupName = 'OpenEXR';

    protected $g0 = 'OpenEXR';

    protected $g1 = 'OpenEXR';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Environment Map';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Latitude/Longitude',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Cube',
        ),
    );

}
