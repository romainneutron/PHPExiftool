<?php

namespace PHPExiftool\Driver\Tag\OpenEXR;

class LineOrder extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'lineOrder';

    protected $Name = 'LineOrder';

    protected $FullName = 'OpenEXR::Main';

    protected $GroupName = 'OpenEXR';

    protected $g0 = 'OpenEXR';

    protected $g1 = 'OpenEXR';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Line Order';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Increasing Y',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Decreasing Y',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Random Y',
        ),
    );

}
