<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class SourceImageIDs extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0020,31xx';

    protected $Name = 'SourceImageIDs';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Source Image I Ds';

}
