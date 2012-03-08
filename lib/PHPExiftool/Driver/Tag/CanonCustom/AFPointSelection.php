<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class AFPointSelection extends \PHPExiftool\Driver\Tag
{

    protected $Id = 11;

    protected $Name = 'AFPointSelection';

    protected $FullName = 'CanonCustom::Functions1D';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AF Point Selection';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'H=AF+Main/V=AF+Command',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'H=Comp+Main/V=Comp+Command',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'H=Command only/V=Assist+Main',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'H=FEL+Main/V=FEL+Command',
        ),
    );

}
