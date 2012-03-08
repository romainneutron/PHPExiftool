<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class NumberOfPatientRelatedStudies extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0020,1200';

    protected $Name = 'NumberOfPatientRelatedStudies';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Number Of Patient Related Studies';

}
