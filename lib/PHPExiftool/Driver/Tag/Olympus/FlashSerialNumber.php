<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class FlashSerialNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4099;

    protected $Name = 'FlashSerialNumber';

    protected $FullName = 'Olympus::Equipment';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Flash Serial Number';

    protected $flag_Permanent = true;

}
