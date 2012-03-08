<?php

namespace PHPExiftool\Driver\Tag\MIELens;

class LensSerialNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'SerialNumber';

    protected $Name = 'LensSerialNumber';

    protected $FullName = 'MIE::Lens';

    protected $GroupName = 'MIE-Lens';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-Lens';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Lens Serial Number';

}
