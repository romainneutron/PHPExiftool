<?php

namespace PHPExiftool\Driver\Tag\Stim;

class ConvergenceBaseImage extends \PHPExiftool\Driver\Tag
{

    protected $Id = 11;

    protected $Name = 'ConvergenceBaseImage';

    protected $FullName = 'Stim::Main';

    protected $GroupName = 'Stim';

    protected $g0 = 'Stim';

    protected $g1 = 'Stim';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Convergence Base Image';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Left Viewpoint',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Right Viewpoint',
        ),
        255 => array(
            'Id' => 255,
            'Label' => 'Equivalent for Both Viewpoints',
        ),
    );

}
