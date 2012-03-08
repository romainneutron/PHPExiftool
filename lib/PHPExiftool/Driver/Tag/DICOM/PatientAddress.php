<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class PatientAddress extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0010,1040';

    protected $Name = 'PatientAddress';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Patient Address';

}
