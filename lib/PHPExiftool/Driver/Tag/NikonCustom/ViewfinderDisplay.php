<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class ViewfinderDisplay extends \PHPExiftool\Driver\Tag
{

    protected $Id = '12.4';

    protected $Name = 'ViewfinderDisplay';

    protected $FullName = 'NikonCustom::SettingsD3';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Viewfinder Display';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Frame Count',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Exposures Remaining',
        ),
    );

}
