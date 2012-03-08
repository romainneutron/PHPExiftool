<?php

namespace PHPExiftool\Driver\Tag\Canon;

class DateStampMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 28;

    protected $Name = 'DateStampMode';

    protected $FullName = 'Canon::Main';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Date Stamp Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Date',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Date & Time',
        ),
    );

}
