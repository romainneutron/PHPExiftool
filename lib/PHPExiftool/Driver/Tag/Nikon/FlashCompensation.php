<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class FlashCompensation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 10;

    protected $Name = 'FlashCompensation';

    protected $FullName = 'mixed';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int8s';

    protected $Writable = true;

    protected $Description = 'Flash Compensation';

    protected $flag_Permanent = true;

    protected $Index = 1;

}
