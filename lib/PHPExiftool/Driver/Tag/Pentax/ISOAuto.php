<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class ISOAuto extends \PHPExiftool\Driver\Tag
{

    protected $Id = '14.4';

    protected $Name = 'ISOAuto';

    protected $FullName = 'Pentax::CameraSettings';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'ISO Auto';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'On',
        ),
    );

}
