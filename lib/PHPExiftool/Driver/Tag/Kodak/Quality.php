<?php

namespace PHPExiftool\Driver\Tag\Kodak;

class Quality extends \PHPExiftool\Driver\Tag
{

    protected $Id = 9;

    protected $Name = 'Quality';

    protected $FullName = 'Kodak::Main';

    protected $GroupName = 'Kodak';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Kodak';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Quality';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Fine',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Normal',
        ),
    );

}
