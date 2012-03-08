<?php

namespace PHPExiftool\Driver\Tag\MPEG;

class AudioLayer extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Bit13-14';

    protected $Name = 'AudioLayer';

    protected $FullName = 'MPEG::Audio';

    protected $GroupName = 'MPEG';

    protected $g0 = 'MPEG';

    protected $g1 = 'MPEG';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Audio Layer';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 3,
        ),
        2 => array(
            'Id' => 2,
            'Label' => 2,
        ),
        3 => array(
            'Id' => 3,
            'Label' => 1,
        ),
    );

}
