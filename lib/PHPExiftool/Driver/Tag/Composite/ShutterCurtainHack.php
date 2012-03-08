<?php

namespace PHPExiftool\Driver\Tag\Composite;

class ShutterCurtainHack extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'ShutterCurtainHack';

    protected $Name = 'ShutterCurtainHack';

    protected $FullName = 'Composite';

    protected $GroupName = 'Composite';

    protected $g0 = 'Composite';

    protected $g1 = 'Composite';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Shutter Curtain Sync';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '1st-curtain sync',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '2nd-curtain sync',
        ),
    );

}
