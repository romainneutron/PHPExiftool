<?php

namespace PHPExiftool\Driver\Tag\MPEG;

class MSStereo extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Bit26';

    protected $Name = 'MSStereo';

    protected $FullName = 'MPEG::Audio';

    protected $GroupName = 'MPEG';

    protected $g0 = 'MPEG';

    protected $g1 = 'MPEG';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'MS Stereo';

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
