<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class BlurControl extends \PHPExiftool\Driver\Tag
{

    protected $Id = 130;

    protected $Name = 'BlurControl';

    protected $FullName = 'Pentax::Main';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Blur Control';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Low',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Medium',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'High',
        ),
    );

}
