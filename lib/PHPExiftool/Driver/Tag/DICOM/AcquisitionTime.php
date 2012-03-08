<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class AcquisitionTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0008,0032';

    protected $Name = 'AcquisitionTime';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Acquisition Time';

}
