<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class AFSearch extends \PHPExiftool\Driver\Tag
{

    protected $Id = 771;

    protected $Name = 'AFSearch';

    protected $FullName = 'Olympus::CameraSettings';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'AF Search';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Not Ready',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Ready',
        ),
    );

}
