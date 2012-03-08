<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class BitsStored extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0028,0101';

    protected $Name = 'BitsStored';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Bits Stored';

}
