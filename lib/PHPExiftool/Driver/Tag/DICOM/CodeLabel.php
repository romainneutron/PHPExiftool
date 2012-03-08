<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class CodeLabel extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0028,08x0';

    protected $Name = 'CodeLabel';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Code Label';

}
