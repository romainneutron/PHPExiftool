<?php

namespace PHPExiftool\Driver\Tag\XMPPlus;

class ModelReleaseStatus extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'ModelReleaseStatus';

    protected $Name = 'ModelReleaseStatus';

    protected $FullName = 'XMP::plus';

    protected $GroupName = 'XMP-plus';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-plus';

    protected $g2 = 'Author';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Model Release Status';

    protected $Values = array(
        'MR-LMR' => array(
            'Id' => 'MR-LMR',
            'Label' => 'Limited or Incomplete Model Releases',
        ),
        'MR-NAP' => array(
            'Id' => 'MR-NAP',
            'Label' => 'Not Applicable',
        ),
        'MR-NON' => array(
            'Id' => 'MR-NON',
            'Label' => 'None',
        ),
        'MR-UMR' => array(
            'Id' => 'MR-UMR',
            'Label' => 'Unlimited Model Releases',
        ),
    );

}
