<?php

namespace PHPExiftool\Driver\Tag\Canon;

class WBBracketMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 9;

    protected $Name = 'WBBracketMode';

    protected $FullName = 'Canon::FileInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'WB Bracket Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On (shift AB)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'On (shift GM)',
        ),
    );

}
