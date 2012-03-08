<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class PixelRepresentation extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0028,0103';

    protected $Name = 'PixelRepresentation';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Pixel Representation';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unsigned',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Signed',
        ),
    );

}
