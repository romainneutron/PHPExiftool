<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class DynamicRange extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0018,5030';

    protected $Name = 'DynamicRange';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Dynamic Range';

}
