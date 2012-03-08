<?php

namespace PHPExiftool\Driver\Tag\Canon;

class HighlightTonePriority extends \PHPExiftool\Driver\Tag
{

    protected $Id = 7;

    protected $Name = 'HighlightTonePriority';

    protected $FullName = 'mixed';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Highlight Tone Priority';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
    );

}
