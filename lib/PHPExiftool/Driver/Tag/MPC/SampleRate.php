<?php

namespace PHPExiftool\Driver\Tag\MPC;

class SampleRate extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Bit080-081';

    protected $Name = 'SampleRate';

    protected $FullName = 'MPC::Main';

    protected $GroupName = 'MPC';

    protected $g0 = 'MPC';

    protected $g1 = 'MPC';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Sample Rate';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 44100,
        ),
        1 => array(
            'Id' => 1,
            'Label' => 48000,
        ),
        2 => array(
            'Id' => 2,
            'Label' => 37800,
        ),
        3 => array(
            'Id' => 3,
            'Label' => 32000,
        ),
    );

}
