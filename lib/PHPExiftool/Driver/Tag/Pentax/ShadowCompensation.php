<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class ShadowCompensation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 121;

    protected $Name = 'ShadowCompensation';

    protected $FullName = 'Pentax::Main';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Shadow Compensation';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
        '0 0' => array(
            'Id' => '0 0',
            'Label' => 'Off',
        ),
        '1 1' => array(
            'Id' => '1 1',
            'Label' => 'Weak',
        ),
        '1 2' => array(
            'Id' => '1 2',
            'Label' => 'Normal',
        ),
        '1 3' => array(
            'Id' => '1 3',
            'Label' => 'Strong',
        ),
    );

}
