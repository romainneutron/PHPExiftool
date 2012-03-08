<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class ISOSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = '17.3';

    protected $Name = 'ISOSetting';

    protected $FullName = 'Pentax::CameraSettings';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'ISO Setting';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Manual',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Auto',
        ),
    );

}
