<?php

namespace PHPExiftool\Driver\Tag\XMPPlus;

class ImageDuplicationConstraints extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'ImageDuplicationConstraints';

    protected $Name = 'ImageDuplicationConstraints';

    protected $FullName = 'XMP::plus';

    protected $GroupName = 'XMP-plus';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-plus';

    protected $g2 = 'Author';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Image Duplication Constraints';

    protected $Values = array(
        'DP-LIC' => array(
            'Id' => 'DP-LIC',
            'Label' => 'Duplication Only as Necessary Under License',
        ),
        'DP-NDC' => array(
            'Id' => 'DP-NDC',
            'Label' => 'No Duplication Constraints',
        ),
        'DP-NOD' => array(
            'Id' => 'DP-NOD',
            'Label' => 'No Duplication',
        ),
    );

}
