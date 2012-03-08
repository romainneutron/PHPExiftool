<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class TotalTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = '50xx,200A';

    protected $Name = 'TotalTime';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Total Time';

}
