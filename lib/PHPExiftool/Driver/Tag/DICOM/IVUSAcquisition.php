<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class IVUSAcquisition extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0018,3100';

    protected $Name = 'IVUSAcquisition';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'IVUS Acquisition';

}
