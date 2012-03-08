<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class PatientStatus extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0011,1010';

    protected $Name = 'PatientStatus';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Patient Status';

}
