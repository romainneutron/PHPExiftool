<?php

namespace PHPExiftool\Driver\Tag\Canon;

class FocalType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'FocalType';

    protected $FullName = 'mixed';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'mixed';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Focal Type';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Fixed',
        ),
        1 => array(
            'Id' => 2,
            'Label' => 'Zoom',
        ),
        2 => array(
            'Id' => 1,
            'Label' => 'Fixed',
        ),
        3 => array(
            'Id' => 2,
            'Label' => 'Zoom',
        ),
    );

}
