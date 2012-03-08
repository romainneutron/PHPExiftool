<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class AccessionNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0008,0050';

    protected $Name = 'AccessionNumber';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Accession Number';

}
