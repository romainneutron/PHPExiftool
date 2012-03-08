<?php

namespace PHPExiftool\Driver\Tag\NITF;

class Flags extends \PHPExiftool\Driver\Tag
{

    protected $Id = 14;

    protected $Name = 'Flags';

    protected $FullName = 'JPEG::NITF';

    protected $GroupName = 'NITF';

    protected $g0 = 'APP6';

    protected $g1 = 'NITF';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Flags';

}
