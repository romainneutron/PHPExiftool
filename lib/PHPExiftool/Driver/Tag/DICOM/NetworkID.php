<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class NetworkID extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0008,1000';

    protected $Name = 'NetworkID';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Network ID';

}
