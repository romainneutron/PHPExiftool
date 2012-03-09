<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class BlueBalance extends \PHPExiftool\Driver\Tag
{

    protected $Id = 625;

    protected $Name = 'BlueBalance';

    protected $FullName = 'Nikon::ColorBalanceA';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Blue Balance';

    protected $flag_Permanent = true;

    protected $flag_Unsafe = true;

}
