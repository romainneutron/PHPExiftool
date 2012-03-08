<?php

namespace PHPExiftool\Driver\Tag\Kodak;

class FocusMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 56;

    protected $Name = 'FocusMode';

    protected $FullName = 'Kodak::Main';

    protected $GroupName = 'Kodak';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Kodak';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Focus Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Macro',
        ),
    );

}
