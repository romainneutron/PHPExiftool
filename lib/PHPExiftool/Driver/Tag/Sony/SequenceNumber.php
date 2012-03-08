<?php

namespace PHPExiftool\Driver\Tag\Sony;

class SequenceNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 45130;

    protected $Name = 'SequenceNumber';

    protected $FullName = 'Sony::Main';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Sequence Number';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Single',
        ),
        65535 => array(
            'Id' => 65535,
            'Label' => 'n/a',
        ),
    );

}
