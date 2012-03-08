<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class NumberOfBeams extends \PHPExiftool\Driver\Tag
{

    protected $Id = '300A,0080';

    protected $Name = 'NumberOfBeams';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Number Of Beams';

}
