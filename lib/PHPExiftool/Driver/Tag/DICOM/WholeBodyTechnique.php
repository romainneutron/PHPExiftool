<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class WholeBodyTechnique extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0018,1301';

    protected $Name = 'WholeBodyTechnique';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Whole Body Technique';

}
