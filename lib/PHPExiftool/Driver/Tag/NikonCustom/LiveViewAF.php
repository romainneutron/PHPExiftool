<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class LiveViewAF extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'LiveViewAF';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Live View AF';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Face Priority',
        ),
        1 => array(
            'Id' => 32,
            'Label' => 'Wide Area',
        ),
        2 => array(
            'Id' => 64,
            'Label' => 'Normal Area',
        ),
        3 => array(
            'Id' => 96,
            'Label' => 'Subject Tracking',
        ),
        4 => array(
            'Id' => 0,
            'Label' => 'Face Priority',
        ),
        5 => array(
            'Id' => 64,
            'Label' => 'Wide Area',
        ),
        6 => array(
            'Id' => 128,
            'Label' => 'Normal Area',
        ),
    );

}
