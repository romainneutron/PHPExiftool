<?php

namespace PHPExiftool\Driver\Tag\MPEG;

class CopyrightFlag extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Bit28';

    protected $Name = 'CopyrightFlag';

    protected $FullName = 'MPEG::Audio';

    protected $GroupName = 'MPEG';

    protected $g0 = 'MPEG';

    protected $g1 = 'MPEG';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Copyright Flag';

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
