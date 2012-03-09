<?php

namespace PHPExiftool\Driver\Tag\Reconyx;

class TriggerMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 6;

    protected $Name = 'TriggerMode';

    protected $FullName = 'Reconyx::Main';

    protected $GroupName = 'Reconyx';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Reconyx';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Trigger Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        'C' => array(
            'Id' => 'C',
            'Label' => 'CodeLoc Not Entered',
        ),
        'E' => array(
            'Id' => 'E',
            'Label' => 'External Sensor',
        ),
        'M' => array(
            'Id' => 'M',
            'Label' => 'Motion Detection',
        ),
        'T' => array(
            'Id' => 'T',
            'Label' => 'Time Lapse',
        ),
    );

}
