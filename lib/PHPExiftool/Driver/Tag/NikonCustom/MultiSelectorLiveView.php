<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class MultiSelectorLiveView extends \PHPExiftool\Driver\Tag
{

    protected $Id = '4.3';

    protected $Name = 'MultiSelectorLiveView';

    protected $FullName = 'NikonCustom::SettingsD3';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Multi Selector Live View';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Reset',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Zoom On/Off',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Start Movie Recording',
        ),
        192 => array(
            'Id' => 192,
            'Label' => 'Not Used',
        ),
    );

}
