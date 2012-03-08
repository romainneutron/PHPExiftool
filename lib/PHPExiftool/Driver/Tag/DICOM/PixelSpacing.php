<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class PixelSpacing extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0028,0030';

    protected $Name = 'PixelSpacing';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Pixel Spacing';

}
