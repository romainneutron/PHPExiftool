<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class MaskingImage extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0020,0080';

    protected $Name = 'MaskingImage';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Masking Image';

}
