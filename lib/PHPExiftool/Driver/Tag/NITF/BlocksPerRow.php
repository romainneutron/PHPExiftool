<?php

namespace PHPExiftool\Driver\Tag\NITF;

class BlocksPerRow extends \PHPExiftool\Driver\Tag
{

    protected $Id = 3;

    protected $Name = 'BlocksPerRow';

    protected $FullName = 'JPEG::NITF';

    protected $GroupName = 'NITF';

    protected $g0 = 'APP6';

    protected $g1 = 'NITF';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Blocks Per Row';

}
