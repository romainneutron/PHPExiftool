<?php

namespace PHPExiftool\Driver\Tag\Photoshop;

class CopyrightFlag extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1034;

    protected $Name = 'CopyrightFlag';

    protected $FullName = 'Photoshop::Main';

    protected $GroupName = 'Photoshop';

    protected $g0 = 'Photoshop';

    protected $g1 = 'Photoshop';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Copyright Flag';

    protected $local_g2 = 'Author';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => False,
        ),
        1 => array(
            'Id' => 1,
            'Label' => True,
        ),
    );

}
