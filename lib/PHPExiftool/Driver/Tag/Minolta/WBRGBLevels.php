<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class WBRGBLevels extends \PHPExiftool\Driver\Tag
{

    protected $Id = 150;

    protected $Name = 'WB_RGBLevels';

    protected $FullName = 'Minolta::WBInfoA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'WB RGB Levels';

    protected $flag_Permanent = true;

}
