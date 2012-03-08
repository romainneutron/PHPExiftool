<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class DeviceSequence extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0050,0010';

    protected $Name = 'DeviceSequence';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Device Sequence';

}
