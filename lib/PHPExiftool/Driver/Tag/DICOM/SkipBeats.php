<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class SkipBeats extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0018,1086';

    protected $Name = 'SkipBeats';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Skip Beats';

}
