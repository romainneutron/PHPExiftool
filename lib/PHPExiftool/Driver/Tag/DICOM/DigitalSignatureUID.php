<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class DigitalSignatureUID extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0400,0100';

    protected $Name = 'DigitalSignatureUID';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Digital Signature UID';

}
