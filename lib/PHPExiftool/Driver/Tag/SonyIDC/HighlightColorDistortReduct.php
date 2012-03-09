<?php

namespace PHPExiftool\Driver\Tag\SonyIDC;

class HighlightColorDistortReduct extends \PHPExiftool\Driver\Tag
{

    protected $Id = 32806;

    protected $Name = 'HighlightColorDistortReduct';

    protected $FullName = 'SonyIDC::Main';

    protected $GroupName = 'SonyIDC';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'SonyIDC';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Highlight Color Distort Reduct';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Standard',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Advanced',
        ),
    );

}
