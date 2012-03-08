<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class PatientComments extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0010,4000';

    protected $Name = 'PatientComments';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Patient Comments';

}
