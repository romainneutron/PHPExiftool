<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class SmallestPixelValueInSeries extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0028,0108';

    protected $Name = 'SmallestPixelValueInSeries';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Smallest Pixel Value In Series';

}
