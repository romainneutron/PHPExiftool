<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class ReferencedSOPInstanceUID extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0008,1155';

    protected $Name = 'ReferencedSOPInstanceUID';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Referenced SOP Instance UID';

}
