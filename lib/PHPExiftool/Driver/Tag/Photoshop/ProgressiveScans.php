<?php

namespace PHPExiftool\Driver\Tag\Photoshop;

class ProgressiveScans extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'ProgressiveScans';

    protected $FullName = 'Photoshop::JPEG_Quality';

    protected $GroupName = 'Photoshop';

    protected $g0 = 'Photoshop';

    protected $g1 = 'Photoshop';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = false;

    protected $Description = 'Progressive Scans';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => '3 Scans',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '4 Scans',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '5 Scans',
        ),
    );

}
