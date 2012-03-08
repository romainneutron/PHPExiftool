<?php

namespace PHPExiftool\Driver\Tag\Casio;

class CasioQuality extends \PHPExiftool\Driver\Tag
{

    protected $Id = 44;

    protected $Name = 'CasioQuality';

    protected $FullName = 'Casio::QVCI';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Casio Quality';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Economy',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Normal',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Fine',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Super Fine',
        ),
    );

}
