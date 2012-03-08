<?php

namespace PHPExiftool\Driver\Tag\H264;

class CustomRendered extends \PHPExiftool\Driver\Tag
{

    protected $Id = 167;

    protected $Name = 'CustomRendered';

    protected $FullName = 'H264::MDPM';

    protected $GroupName = 'H264';

    protected $g0 = 'H264';

    protected $g1 = 'H264';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Custom Rendered';

    protected $local_g2 = 'Image';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Custom',
        ),
    );

}
