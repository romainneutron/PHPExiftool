<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class CertifiedTimestamp extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0400,0310';

    protected $Name = 'CertifiedTimestamp';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Certified Timestamp';

}
