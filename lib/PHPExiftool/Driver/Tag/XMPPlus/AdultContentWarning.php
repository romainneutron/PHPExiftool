<?php

namespace PHPExiftool\Driver\Tag\XMPPlus;

class AdultContentWarning extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'AdultContentWarning';

    protected $Name = 'AdultContentWarning';

    protected $FullName = 'XMP::plus';

    protected $GroupName = 'XMP-plus';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-plus';

    protected $g2 = 'Author';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Adult Content Warning';

    protected $Values = array(
        'CW-AWR' => array(
            'Id' => 'CW-AWR',
            'Label' => 'Adult Content Warning Required',
        ),
        'CW-NRQ' => array(
            'Id' => 'CW-NRQ',
            'Label' => 'Not Required',
        ),
        'CW-UNK' => array(
            'Id' => 'CW-UNK',
            'Label' => 'Unknown',
        ),
    );

}
