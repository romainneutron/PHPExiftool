<?php

namespace PHPExiftool\Driver\Tag\MinoltaRaw;

class ISOSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 6;

    protected $Name = 'ISOSetting';

    protected $FullName = 'MinoltaRaw::RIF';

    protected $GroupName = 'MinoltaRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'MinoltaRaw';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'ISO Setting';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        48 => array(
            'Id' => 48,
            'Label' => 100,
        ),
        56 => array(
            'Id' => 56,
            'Label' => 200,
        ),
        64 => array(
            'Id' => 64,
            'Label' => 400,
        ),
        72 => array(
            'Id' => 72,
            'Label' => 800,
        ),
        80 => array(
            'Id' => 80,
            'Label' => 1600,
        ),
        174 => array(
            'Id' => 174,
            'Label' => '80 (Zone Matching Low)',
        ),
        184 => array(
            'Id' => 184,
            'Label' => '200 (Zone Matching High)',
        ),
    );

}
