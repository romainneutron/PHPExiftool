<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class BeamNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = '300A,00C0';

    protected $Name = 'BeamNumber';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Beam Number';

}
