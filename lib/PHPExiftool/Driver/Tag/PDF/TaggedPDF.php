<?php

namespace PHPExiftool\Driver\Tag\PDF;

class TaggedPDF extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Marked';

    protected $Name = 'TaggedPDF';

    protected $FullName = 'PDF::MarkInfo';

    protected $GroupName = 'PDF';

    protected $g0 = 'PDF';

    protected $g1 = 'PDF';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Tagged PDF';

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
