<?php

namespace PHPExiftool\Driver\Tag\SonyIDC;

class CreativeStyleWasChanged extends \PHPExiftool\Driver\Tag
{

    protected $Id = 32769;

    protected $Name = 'CreativeStyleWasChanged';

    protected $FullName = 'SonyIDC::Main';

    protected $GroupName = 'SonyIDC';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'SonyIDC';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Creative Style Was Changed';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Yes',
        ),
    );

}
