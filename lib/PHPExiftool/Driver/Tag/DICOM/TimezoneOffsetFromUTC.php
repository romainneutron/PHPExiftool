<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class TimezoneOffsetFromUTC extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0008,0201';

    protected $Name = 'TimezoneOffsetFromUTC';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Timezone Offset From UTC';

}
