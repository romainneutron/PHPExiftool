<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class ManualTv extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'ManualTv';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Manual Tv/Av For M';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Tv=Main/Av=Control',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Tv=Control/Av=Main',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Tv=Main/Av=Main w/o lens',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Tv=Control/Av=Main w/o lens',
        ),
        4 => array(
            'Id' => 0,
            'Label' => 'Tv=Main/Av=Control',
        ),
        5 => array(
            'Id' => 1,
            'Label' => 'Tv=Control/Av=Main',
        ),
    );

}
