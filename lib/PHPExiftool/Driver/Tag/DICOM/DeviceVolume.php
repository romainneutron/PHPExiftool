<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class DeviceVolume extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0050,0018';

    protected $Name = 'DeviceVolume';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Device Volume';

}
