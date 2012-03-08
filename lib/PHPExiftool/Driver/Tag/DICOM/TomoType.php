<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class TomoType extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0018,1490';

    protected $Name = 'TomoType';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Tomo Type';

}
