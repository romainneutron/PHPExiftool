<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class Modality extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0008,0060';

    protected $Name = 'Modality';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Modality';

}
