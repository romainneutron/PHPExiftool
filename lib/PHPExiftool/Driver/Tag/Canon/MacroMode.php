<?php

namespace PHPExiftool\Driver\Tag\Canon;

class MacroMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'MacroMode';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Macro Mode';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Macro',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Normal',
        ),
    );

}
