<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class Extender extends \PHPExiftool\Driver\Tag
{

    protected $Id = 769;

    protected $Name = 'Extender';

    protected $FullName = 'Olympus::Equipment';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Extender';

    protected $Values = array(
        '0 0' => array(
            'Id' => '0 0',
            'Label' => 'None',
        ),
        '0 4' => array(
            'Id' => '0 4',
            'Label' => 'Olympus Zuiko Digital EC-14 1.4x Teleconverter',
        ),
        '0 8' => array(
            'Id' => '0 8',
            'Label' => 'Olympus EX-25 Extension Tube',
        ),
        '0 16' => array(
            'Id' => '0 16',
            'Label' => 'Olympus Zuiko Digital EC-20 2.0x Teleconverter',
        ),
    );

}
