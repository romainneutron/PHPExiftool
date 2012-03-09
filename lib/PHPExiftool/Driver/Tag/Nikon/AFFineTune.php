<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class AFFineTune extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'AFFineTune';

    protected $FullName = 'Nikon::AFTune';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AF Fine Tune';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On (1)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'On (2)',
        ),
    );

}
