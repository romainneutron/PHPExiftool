<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class ImageID extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0054,0400';

    protected $Name = 'ImageID';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Image ID';

}
