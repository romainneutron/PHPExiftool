<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class TextStamp extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'TextStamp';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Text Stamp';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Off',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'On',
        ),
    );

}
