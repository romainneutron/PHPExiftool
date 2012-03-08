<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class AcquisitionComments extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0018,4000';

    protected $Name = 'AcquisitionComments';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Acquisition Comments';

}
