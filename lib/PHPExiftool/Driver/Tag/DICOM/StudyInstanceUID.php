<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class StudyInstanceUID extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0020,000D';

    protected $Name = 'StudyInstanceUID';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Study Instance UID';

}
