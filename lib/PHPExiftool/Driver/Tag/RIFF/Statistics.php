<?php

namespace PHPExiftool\Driver\Tag\RIFF;

class Statistics extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'STAT';

    protected $Name = 'Statistics';

    protected $FullName = 'RIFF::Info';

    protected $GroupName = 'RIFF';

    protected $g0 = 'RIFF';

    protected $g1 = 'RIFF';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Statistics';

    protected $local_g2 = 'Video';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Bad',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'OK',
        ),
    );

}
