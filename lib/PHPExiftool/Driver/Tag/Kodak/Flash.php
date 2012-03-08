<?php

namespace PHPExiftool\Driver\Tag\Kodak;

class Flash extends \PHPExiftool\Driver\Tag
{

    protected $Id = 34;

    protected $Name = 'Flash';

    protected $FullName = 'Kodak::Type6';

    protected $GroupName = 'Kodak';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Kodak';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Flash';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No Flash',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Fired',
        ),
    );

}
