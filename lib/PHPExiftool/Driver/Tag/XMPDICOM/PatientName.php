<?php

namespace PHPExiftool\Driver\Tag\XMPDICOM;

class PatientName extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'PatientName';

    protected $Name = 'PatientName';

    protected $FullName = 'XMP::DICOM';

    protected $GroupName = 'XMP-DICOM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-DICOM';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Patient Name';

}
