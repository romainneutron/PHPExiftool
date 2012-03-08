<?php

namespace PHPExiftool\Driver\Tag\MPEG;

class LameMethod extends \PHPExiftool\Driver\Tag
{

    protected $Id = 9;

    protected $Name = 'LameMethod';

    protected $FullName = 'MPEG::Lame';

    protected $GroupName = 'MPEG';

    protected $g0 = 'MPEG';

    protected $g1 = 'MPEG';

    protected $g2 = 'Audio';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Lame Method';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'CBR',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'ABR',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'VBR (old/rh)',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'VBR (new/mtrh)',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'VBR (old/rh)',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'VBR',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'CBR (2-pass)',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'ABR (2-pass)',
        ),
    );

}
