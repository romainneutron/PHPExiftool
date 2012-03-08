<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class MedicalRecordLocator extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0010,1090';

    protected $Name = 'MedicalRecordLocator';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Medical Record Locator';

}
