<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class LargestPixelValueInSeries extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0028,0109';

    protected $Name = 'LargestPixelValueInSeries';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Largest Pixel Value In Series';

}
