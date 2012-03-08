<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class PatientSetupSequence extends \PHPExiftool\Driver\Tag
{

    protected $Id = '300A,0180';

    protected $Name = 'PatientSetupSequence';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Patient Setup Sequence';

}
