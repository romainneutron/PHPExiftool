<?php

namespace PHPExiftool\Driver\Tag\MIEFlash;

class FlashSerialNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'SerialNumber';

    protected $Name = 'FlashSerialNumber';

    protected $FullName = 'MIE::Flash';

    protected $GroupName = 'MIE-Flash';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-Flash';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Flash Serial Number';

}
