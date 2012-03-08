<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class TomoTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0018,1480';

    protected $Name = 'TomoTime';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Tomo Time';

}
