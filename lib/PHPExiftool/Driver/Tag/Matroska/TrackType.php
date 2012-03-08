<?php

namespace PHPExiftool\Driver\Tag\Matroska;

class TrackType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 3;

    protected $Name = 'TrackType';

    protected $FullName = 'Matroska::Main';

    protected $GroupName = 'Matroska';

    protected $g0 = 'Matroska';

    protected $g1 = 'Matroska';

    protected $g2 = 'Video';

    protected $Type = 'unsigned';

    protected $Writable = false;

    protected $Description = 'Track Type';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Video',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Audio',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Complex',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Logo',
        ),
        17 => array(
            'Id' => 17,
            'Label' => 'Subtitle',
        ),
        18 => array(
            'Id' => 18,
            'Label' => 'Buttons',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Control',
        ),
    );

}
