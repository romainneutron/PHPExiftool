<?php

namespace PHPExiftool\Driver\Tag\Sanyo;

class RecordShutterRelease extends \PHPExiftool\Driver\Tag
{

    protected $Id = 535;

    protected $Name = 'RecordShutterRelease';

    protected $FullName = 'Sanyo::Main';

    protected $GroupName = 'Sanyo';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sanyo';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Record Shutter Release';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Record while down',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Press start, press stop',
        ),
    );

}
