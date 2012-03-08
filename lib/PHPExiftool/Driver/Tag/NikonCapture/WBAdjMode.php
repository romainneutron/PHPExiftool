<?php

namespace PHPExiftool\Driver\Tag\NikonCapture;

class WBAdjMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 16;

    protected $Name = 'WBAdjMode';

    protected $FullName = 'NikonCapture::WBAdjData';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'WB Adj Mode';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Use Gray Point',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Recorded Value',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Use Temperature',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Calculate Automatically',
        ),
    );

}
