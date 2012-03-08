<?php

namespace PHPExiftool\Driver\Tag\XMPDICOM;

class SeriesDateTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'SeriesDateTime';

    protected $Name = 'SeriesDateTime';

    protected $FullName = 'XMP::DICOM';

    protected $GroupName = 'XMP-DICOM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-DICOM';

    protected $g2 = 'Image';

    protected $Type = 'date';

    protected $Writable = true;

    protected $Description = 'Series Date Time';

    protected $local_g2 = 'Time';

}
