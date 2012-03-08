<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class FilterLowFrequency extends \PHPExiftool\Driver\Tag
{

    protected $Id = '003A,0220';

    protected $Name = 'FilterLowFrequency';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Filter Low Frequency';

}
