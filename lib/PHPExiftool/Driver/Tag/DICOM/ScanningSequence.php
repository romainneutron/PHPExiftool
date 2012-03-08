<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class ScanningSequence extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0018,0020';

    protected $Name = 'ScanningSequence';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Scanning Sequence';

}
