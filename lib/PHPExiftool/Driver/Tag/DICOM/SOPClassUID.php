<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class SOPClassUID extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0008,0016';

    protected $Name = 'SOPClassUID';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'SOP Class UID';

}
