<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class TargetMinimumDose extends \PHPExiftool\Driver\Tag
{

    protected $Id = '300A,0025';

    protected $Name = 'TargetMinimumDose';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Target Minimum Dose';

}
