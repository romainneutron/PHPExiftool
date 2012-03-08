<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class ImageType extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0008,0008';

    protected $Name = 'ImageType';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Image Type';

}
