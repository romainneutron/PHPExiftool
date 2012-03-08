<?php

namespace PHPExiftool\Driver\Tag\NITF;

class BlocksPerColumn extends \PHPExiftool\Driver\Tag
{

    protected $Id = 5;

    protected $Name = 'BlocksPerColumn';

    protected $FullName = 'JPEG::NITF';

    protected $GroupName = 'NITF';

    protected $g0 = 'APP6';

    protected $g1 = 'NITF';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Blocks Per Column';

}
