<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class SerialNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'SerialNumber';

    protected $FullName = 'Nikon::Main';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Serial Number';

    protected $flag_Permanent = true;

    protected $flag_Unsafe = true;

}
