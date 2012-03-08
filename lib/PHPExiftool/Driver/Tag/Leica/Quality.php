<?php

namespace PHPExiftool\Driver\Tag\Leica;

class Quality extends \PHPExiftool\Driver\Tag
{

    protected $Id = 768;

    protected $Name = 'Quality';

    protected $FullName = 'Panasonic::Leica2';

    protected $GroupName = 'Leica';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Leica';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Quality';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Fine',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Basic',
        ),
    );

}
