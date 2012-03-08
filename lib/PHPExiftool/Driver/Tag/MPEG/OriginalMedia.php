<?php

namespace PHPExiftool\Driver\Tag\MPEG;

class OriginalMedia extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Bit29';

    protected $Name = 'OriginalMedia';

    protected $FullName = 'MPEG::Audio';

    protected $GroupName = 'MPEG';

    protected $g0 = 'MPEG';

    protected $g1 = 'MPEG';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Original Media';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => False,
        ),
        1 => array(
            'Id' => 1,
            'Label' => True,
        ),
    );

}
