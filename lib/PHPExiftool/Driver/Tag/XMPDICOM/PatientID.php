<?php

namespace PHPExiftool\Driver\Tag\XMPDICOM;

class PatientID extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'PatientID';

    protected $Name = 'PatientID';

    protected $FullName = 'XMP::DICOM';

    protected $GroupName = 'XMP-DICOM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-DICOM';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Patient ID';

}
