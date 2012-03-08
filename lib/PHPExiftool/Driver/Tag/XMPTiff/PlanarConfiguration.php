<?php

namespace PHPExiftool\Driver\Tag\XMPTiff;

class PlanarConfiguration extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'PlanarConfiguration';

    protected $Name = 'PlanarConfiguration';

    protected $FullName = 'XMP::tiff';

    protected $GroupName = 'XMP-tiff';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-tiff';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Planar Configuration';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Chunky',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Planar',
        ),
    );

}
