<?php

namespace PHPExiftool\Driver\Tag\XMPDICOM;

class SeriesModality extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'SeriesModality';

    protected $Name = 'SeriesModality';

    protected $FullName = 'XMP::DICOM';

    protected $GroupName = 'XMP-DICOM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-DICOM';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Series Modality';

}
