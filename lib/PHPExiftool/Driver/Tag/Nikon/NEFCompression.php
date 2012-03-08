<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class NEFCompression extends \PHPExiftool\Driver\Tag
{

    protected $Id = 147;

    protected $Name = 'NEFCompression';

    protected $FullName = 'Nikon::Main';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'NEF Compression';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Lossy (type 1)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Uncompressed',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Lossless',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Lossy (type 2)',
        ),
    );

}
