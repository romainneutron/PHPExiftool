<?php

namespace PHPExiftool\Driver\Tag\Photoshop;

class PhotoshopFormat extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'PhotoshopFormat';

    protected $FullName = 'Photoshop::JPEG_Quality';

    protected $GroupName = 'Photoshop';

    protected $g0 = 'Photoshop';

    protected $g1 = 'Photoshop';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = false;

    protected $Description = 'Photoshop Format';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Standard',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Optimised',
        ),
        257 => array(
            'Id' => 257,
            'Label' => 'Progressive',
        ),
    );

}
