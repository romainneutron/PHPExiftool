<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class SeriesInStudy extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0020,1000';

    protected $Name = 'SeriesInStudy';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Series In Study';

}
