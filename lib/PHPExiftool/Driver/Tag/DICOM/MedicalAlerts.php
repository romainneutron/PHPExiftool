<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class MedicalAlerts extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0010,2000';

    protected $Name = 'MedicalAlerts';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Medical Alerts';

}
