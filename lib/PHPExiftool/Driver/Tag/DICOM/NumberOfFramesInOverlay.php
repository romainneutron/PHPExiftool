<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class NumberOfFramesInOverlay extends \PHPExiftool\Driver\Tag
{

    protected $Id = '60xx,0015';

    protected $Name = 'NumberOfFramesInOverlay';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Number Of Frames In Overlay';

}
