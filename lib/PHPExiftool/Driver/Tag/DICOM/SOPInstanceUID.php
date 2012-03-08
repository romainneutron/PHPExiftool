<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class SOPInstanceUID extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0008,0018';

    protected $Name = 'SOPInstanceUID';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'SOP Instance UID';

}
