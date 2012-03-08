<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class ZoomFactor extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0028,0031';

    protected $Name = 'ZoomFactor';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Zoom Factor';

}
