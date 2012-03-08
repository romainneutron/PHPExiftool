<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class LeftImageSequence extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0022,0021';

    protected $Name = 'LeftImageSequence';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Left Image Sequence';

}
