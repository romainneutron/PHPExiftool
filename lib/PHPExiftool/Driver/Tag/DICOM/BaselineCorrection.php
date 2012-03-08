<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class BaselineCorrection extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0018,9067';

    protected $Name = 'BaselineCorrection';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Baseline Correction';

}
