<?php

namespace PHPExiftool\Driver\Tag\Sony;

class Flash extends \PHPExiftool\Driver\Tag
{

    protected $Id = 118;

    protected $Name = 'Flash';

    protected $FullName = 'Sony::PMP';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Flash';

    protected $local_g2 = 'Camera';

    protected $flag_Permanent = true;

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
