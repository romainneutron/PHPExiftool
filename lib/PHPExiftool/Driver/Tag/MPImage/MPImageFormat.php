<?php

namespace PHPExiftool\Driver\Tag\MPImage;

class MPImageFormat extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0.2';

    protected $Name = 'MPImageFormat';

    protected $FullName = 'MPF::MPImage';

    protected $GroupName = 'MPImage';

    protected $g0 = 'MPF';

    protected $g1 = 'MPImage';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'MP Image Format';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'JPEG',
        ),
    );

}
