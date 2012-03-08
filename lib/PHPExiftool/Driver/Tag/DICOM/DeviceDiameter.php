<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class DeviceDiameter extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0050,0016';

    protected $Name = 'DeviceDiameter';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Device Diameter';

}
