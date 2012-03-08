<?php

namespace PHPExiftool\Driver\Tag\Sony;

class FlashLevel extends \PHPExiftool\Driver\Tag
{

    protected $Id = 45128;

    protected $Name = 'FlashLevel';

    protected $FullName = 'Sony::Main';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Flash Level';

    protected $Values = array(
        '-32768' => array(
            'Id' => '-32768',
            'Label' => 'Low',
        ),
        '-1' => array(
            'Id' => '-1',
            'Label' => 'n/a',
        ),
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        32767 => array(
            'Id' => 32767,
            'Label' => 'High',
        ),
    );

}
