<?php

namespace PHPExiftool\Driver\Tag\Casio;

class VideoQuality extends \PHPExiftool\Driver\Tag
{

    protected $Id = 16387;

    protected $Name = 'VideoQuality';

    protected $FullName = 'Casio::Type2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Video Quality';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Standard',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'HD (720p)',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Full HD (1080p)',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Low',
        ),
    );

}
