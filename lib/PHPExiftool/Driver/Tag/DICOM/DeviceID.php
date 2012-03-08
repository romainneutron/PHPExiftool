<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class DeviceID extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0018,1003';

    protected $Name = 'DeviceID';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Device ID';

}
