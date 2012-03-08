<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class EchoTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0018,0081';

    protected $Name = 'EchoTime';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Echo Time';

}
