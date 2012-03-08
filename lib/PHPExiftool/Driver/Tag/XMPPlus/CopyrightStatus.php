<?php

namespace PHPExiftool\Driver\Tag\XMPPlus;

class CopyrightStatus extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'CopyrightStatus';

    protected $Name = 'CopyrightStatus';

    protected $FullName = 'XMP::plus';

    protected $GroupName = 'XMP-plus';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-plus';

    protected $g2 = 'Author';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Copyright Status';

    protected $Values = array(
        'CS-PRO' => array(
            'Id' => 'CS-PRO',
            'Label' => 'Protected',
        ),
        'CS-PUB' => array(
            'Id' => 'CS-PUB',
            'Label' => 'Public Domain',
        ),
        'CS-UNK' => array(
            'Id' => 'CS-UNK',
            'Label' => 'Unknown',
        ),
    );

}
