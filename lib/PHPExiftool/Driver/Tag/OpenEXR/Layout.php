<?php

namespace PHPExiftool\Driver\Tag\OpenEXR;

class Layout extends \PHPExiftool\Driver\Tag
{

    protected $Id = '_lay';

    protected $Name = 'Layout';

    protected $FullName = 'OpenEXR::Main';

    protected $GroupName = 'OpenEXR';

    protected $g0 = 'OpenEXR';

    protected $g1 = 'OpenEXR';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Layout';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Scan Lines',
        ),
        512 => array(
            'Id' => 512,
            'Label' => 'Tiles',
        ),
    );

}
