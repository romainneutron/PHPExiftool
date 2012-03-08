<?php

namespace PHPExiftool\Driver\Tag\NikonScan;

class BitDepth extends \PHPExiftool\Driver\Tag
{

    protected $Id = 65;

    protected $Name = 'BitDepth';

    protected $FullName = 'Nikon::Scan';

    protected $GroupName = 'NikonScan';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonScan';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Bit Depth';

}
