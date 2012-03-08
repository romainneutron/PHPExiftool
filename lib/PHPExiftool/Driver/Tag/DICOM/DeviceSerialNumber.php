<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class DeviceSerialNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0018,1000';

    protected $Name = 'DeviceSerialNumber';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Device Serial Number';

}
