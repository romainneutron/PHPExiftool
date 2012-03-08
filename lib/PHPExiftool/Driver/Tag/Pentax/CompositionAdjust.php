<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class CompositionAdjust extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0.1';

    protected $Name = 'CompositionAdjust';

    protected $FullName = 'Pentax::LevelInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8s';

    protected $Writable = true;

    protected $Description = 'Composition Adjust';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Composition Adjust',
        ),
        160 => array(
            'Id' => 160,
            'Label' => 'Composition Adjust + Horizon Correction',
        ),
        192 => array(
            'Id' => 192,
            'Label' => 'Horizon Correction',
        ),
    );

}
