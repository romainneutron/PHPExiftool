<?php

namespace PHPExiftool\Driver\Tag\XML;

class HyperlinksChanged extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'HyperlinksChanged';

    protected $Name = 'HyperlinksChanged';

    protected $FullName = 'OOXML::Main';

    protected $GroupName = 'XML';

    protected $g0 = 'XML';

    protected $g1 = 'XML';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Hyperlinks Changed';

    protected $Values = array(
        false => array(
            'Id' => false,
            'Label' => 'No',
        ),
        true => array(
            'Id' => true,
            'Label' => 'Yes',
        ),
    );

}
