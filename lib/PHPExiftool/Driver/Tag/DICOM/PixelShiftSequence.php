<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class PixelShiftSequence extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0028,9501';

    protected $Name = 'PixelShiftSequence';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Pixel Shift Sequence';

}
