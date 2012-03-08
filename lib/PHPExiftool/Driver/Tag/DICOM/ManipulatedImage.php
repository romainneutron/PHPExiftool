<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class ManipulatedImage extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0028,0050';

    protected $Name = 'ManipulatedImage';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Manipulated Image';

}
