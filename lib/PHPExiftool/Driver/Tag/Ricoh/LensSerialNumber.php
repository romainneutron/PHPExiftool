<?php

namespace PHPExiftool\Driver\Tag\Ricoh;

class LensSerialNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 48;

    protected $Name = 'LensSerialNumber';

    protected $FullName = 'Ricoh::SerialInfo';

    protected $GroupName = 'Ricoh';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Ricoh';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Lens Serial Number';

    protected $flag_Permanent = true;

}
