<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class PatientID extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0010,0020';

    protected $Name = 'PatientID';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Patient ID';

}
