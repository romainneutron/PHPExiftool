<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class ResolutionUnit extends \PHPExiftool\Driver\Tag
{

    protected $Id = 18;

    protected $Name = 'ResolutionUnit';

    protected $FullName = 'Nikon::AVITags';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Resolution Unit';

    protected $local_g2 = 'Image';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'None',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'inches',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'cm',
        ),
    );

}
