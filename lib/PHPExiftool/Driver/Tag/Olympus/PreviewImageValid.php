<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class PreviewImageValid extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'PreviewImageValid';

    protected $FullName = 'mixed';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Preview Image Valid';

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
