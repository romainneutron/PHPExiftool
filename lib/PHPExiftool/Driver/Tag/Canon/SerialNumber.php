<?php

namespace PHPExiftool\Driver\Tag\Canon;

class SerialNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12;

    protected $Name = 'SerialNumber';

    protected $FullName = 'Canon::Main';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Serial Number';

    protected $flag_Permanent = true;

    protected $Index = 'mixed';

}
