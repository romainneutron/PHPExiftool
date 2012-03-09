<?php

namespace PHPExiftool\Driver\Tag\Sony;

class PanoramaDirection extends \PHPExiftool\Driver\Tag
{

    protected $Id = 3;

    protected $Name = 'PanoramaDirection';

    protected $FullName = 'Sony::Panorama';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Panorama Direction';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Right to Left',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Left to Right',
        ),
    );

}
