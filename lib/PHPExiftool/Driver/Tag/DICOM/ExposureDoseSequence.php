<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class ExposureDoseSequence extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0040,030E';

    protected $Name = 'ExposureDoseSequence';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Exposure Dose Sequence';

}
