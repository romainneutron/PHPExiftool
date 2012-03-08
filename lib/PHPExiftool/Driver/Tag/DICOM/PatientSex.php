<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class PatientSex extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0010,0040';

    protected $Name = 'PatientSex';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Patient Sex';

}
