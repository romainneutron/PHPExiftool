<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class LiveViewAFAreaMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = '34.1';

    protected $Name = 'LiveViewAFAreaMode';

    protected $FullName = 'NikonCustom::SettingsD7000';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Live View AF Area Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Face-Priority',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'NormalArea',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'WideArea',
        ),
        96 => array(
            'Id' => 96,
            'Label' => 'SubjectTracking',
        ),
    );

}
