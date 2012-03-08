<?php

namespace PHPExiftool\Driver\Tag\Sony;

class FileFormat extends \PHPExiftool\Driver\Tag
{

    protected $Id = 45056;

    protected $Name = 'FileFormat';

    protected $FullName = 'Sony::Main';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'File Format';

    protected $Values = array(
        '0 0 0 2' => array(
            'Id' => '0 0 0 2',
            'Label' => 'JPEG',
        ),
        '1 0 0 0' => array(
            'Id' => '1 0 0 0',
            'Label' => 'SR2',
        ),
        '2 0 0 0' => array(
            'Id' => '2 0 0 0',
            'Label' => 'ARW 1.0',
        ),
        '3 0 0 0' => array(
            'Id' => '3 0 0 0',
            'Label' => 'ARW 2.0',
        ),
        '3 1 0 0' => array(
            'Id' => '3 1 0 0',
            'Label' => 'ARW 2.1',
        ),
        '3 2 0 0' => array(
            'Id' => '3 2 0 0',
            'Label' => 'ARW 2.2',
        ),
        '3 3 0 0' => array(
            'Id' => '3 3 0 0',
            'Label' => 'ARW 2.3',
        ),
    );

}
