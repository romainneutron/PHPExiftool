<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class PauseBetweenFrames extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0054,0038';

    protected $Name = 'PauseBetweenFrames';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Pause Between Frames';

}
