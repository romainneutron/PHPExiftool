<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class TextEncoding extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4;

    protected $Name = 'TextEncoding';

    protected $FullName = 'Nikon::LocationInfo';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Location';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Text Encoding';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'n/a',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'UTF8',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'UTF16',
        ),
    );

}
