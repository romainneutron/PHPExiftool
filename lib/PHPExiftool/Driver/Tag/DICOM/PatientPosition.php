<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class PatientPosition extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0018,5100';

    protected $Name = 'PatientPosition';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Patient Position';

}
