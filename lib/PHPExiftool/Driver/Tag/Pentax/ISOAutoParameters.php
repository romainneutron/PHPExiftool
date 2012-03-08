<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class ISOAutoParameters extends \PHPExiftool\Driver\Tag
{

    protected $Id = 122;

    protected $Name = 'ISOAutoParameters';

    protected $FullName = 'Pentax::Main';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'ISO Auto Parameters';

    protected $Values = array(
        '1 0' => array(
            'Id' => '1 0',
            'Label' => 'Slow',
        ),
        '2 0' => array(
            'Id' => '2 0',
            'Label' => 'Standard',
        ),
        '3 0' => array(
            'Id' => '3 0',
            'Label' => 'Fast',
        ),
    );

}
