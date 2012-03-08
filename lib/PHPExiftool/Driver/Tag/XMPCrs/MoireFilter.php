<?php

namespace PHPExiftool\Driver\Tag\XMPCrs;

class MoireFilter extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'MoireFilter';

    protected $Name = 'MoireFilter';

    protected $FullName = 'XMP::crs';

    protected $GroupName = 'XMP-crs';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-crs';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Moire Filter';

    protected $Values = array(
        'Off' => array(
            'Id' => 'Off',
            'Label' => 'Off',
        ),
        'On' => array(
            'Id' => 'On',
            'Label' => 'On',
        ),
    );

}
