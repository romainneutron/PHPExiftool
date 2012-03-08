<?php

namespace PHPExiftool\Driver\Tag\NITF;

class NITFVersion extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'NITFVersion';

    protected $FullName = 'JPEG::NITF';

    protected $GroupName = 'NITF';

    protected $g0 = 'APP6';

    protected $g1 = 'NITF';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'NITF Version';

}
