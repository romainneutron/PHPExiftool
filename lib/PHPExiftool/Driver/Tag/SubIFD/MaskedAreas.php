<?php

namespace PHPExiftool\Driver\Tag\SubIFD;

class MaskedAreas extends \PHPExiftool\Driver\Tag
{

    protected $Id = 50830;

    protected $Name = 'MaskedAreas';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'SubIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Masked Areas';

    protected $local_g1 = 'SubIFD';

    protected $flag_Unsafe = true;

}
