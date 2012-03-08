<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class OrganDose extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0040,0316';

    protected $Name = 'OrganDose';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Organ Dose';

}
