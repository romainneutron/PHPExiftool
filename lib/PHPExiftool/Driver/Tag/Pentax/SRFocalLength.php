<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class SRFocalLength extends \PHPExiftool\Driver\Tag
{

    protected $Id = 3;

    protected $Name = 'SRFocalLength';

    protected $FullName = 'Pentax::SRInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'SR Focal Length';

    protected $flag_Permanent = true;

}
