<?php

namespace PHPExiftool\Driver\Tag\NikonCapture;

class ActiveDLighting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 36;

    protected $Name = 'ActiveD-Lighting';

    protected $FullName = 'NikonCapture::Exposure';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Active D-Lighting';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
    );

}
