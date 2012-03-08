<?php

namespace PHPExiftool\Driver\Tag\MNG;

class BackgroundTiling extends \PHPExiftool\Driver\Tag
{

    protected $Id = 9;

    protected $Name = 'BackgroundTiling';

    protected $FullName = 'MNG::Background';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Background Tiling';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Yes',
        ),
    );

}
