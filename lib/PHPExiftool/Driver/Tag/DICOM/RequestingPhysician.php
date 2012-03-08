<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class RequestingPhysician extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0032,1032';

    protected $Name = 'RequestingPhysician';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Requesting Physician';

}
