<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class PatientBirthTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0010,0032';

    protected $Name = 'PatientBirthTime';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Patient Birth Time';

}
