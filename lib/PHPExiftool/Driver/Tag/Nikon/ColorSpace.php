<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class ColorSpace extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'ColorSpace';

    protected $FullName = 'mixed';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = false;

    protected $Description = 'Color Space';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'sRGB',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Adobe RGB',
        ),
    );

}
