<?php

namespace PHPExiftool\Driver\Tag\XMPDICOM;

class StudyDateTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'StudyDateTime';

    protected $Name = 'StudyDateTime';

    protected $FullName = 'XMP::DICOM';

    protected $GroupName = 'XMP-DICOM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-DICOM';

    protected $g2 = 'Image';

    protected $Type = 'date';

    protected $Writable = true;

    protected $Description = 'Study Date Time';

    protected $local_g2 = 'Time';

}
