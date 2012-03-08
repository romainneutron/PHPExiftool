<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class MultipleSpinEcho extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0018,9011';

    protected $Name = 'MultipleSpinEcho';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Multiple Spin Echo';

}
