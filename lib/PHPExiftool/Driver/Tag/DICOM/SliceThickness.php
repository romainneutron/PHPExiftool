<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class SliceThickness extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0018,0050';

    protected $Name = 'SliceThickness';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Slice Thickness';

}
