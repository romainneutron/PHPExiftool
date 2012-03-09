<?php

namespace PHPExiftool\Driver\Tag\PreviewIFD;

class ResolutionUnit extends \PHPExiftool\Driver\Tag
{

    protected $Id = 296;

    protected $Name = 'ResolutionUnit';

    protected $FullName = 'Nikon::PreviewIFD';

    protected $GroupName = 'PreviewIFD';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'PreviewIFD';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Resolution Unit';

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
