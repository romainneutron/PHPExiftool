<?php

namespace PHPExiftool\Driver\Tag\XMPDICOM;

class PatientBirthDate extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'PatientDOB';

    protected $Name = 'PatientBirthDate';

    protected $FullName = 'XMP::DICOM';

    protected $GroupName = 'XMP-DICOM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-DICOM';

    protected $g2 = 'Image';

    protected $Type = 'date';

    protected $Writable = true;

    protected $Description = 'Patient Birth Date';

    protected $local_g2 = 'Time';

}
