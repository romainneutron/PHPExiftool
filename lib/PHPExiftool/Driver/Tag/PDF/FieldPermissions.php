<?php

namespace PHPExiftool\Driver\Tag\PDF;

class FieldPermissions extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Action';

    protected $Name = 'FieldPermissions';

    protected $FullName = 'PDF::TransformParams';

    protected $GroupName = 'PDF';

    protected $g0 = 'PDF';

    protected $g1 = 'PDF';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Field Permissions';

    protected $Values = array(
        'All' => array(
            'Id' => 'All',
            'Label' => 'Disallow changes to all form fields',
        ),
        'Exclude' => array(
            'Id' => 'Exclude',
            'Label' => 'Allow changes to specified form fields',
        ),
        'Include' => array(
            'Id' => 'Include',
            'Label' => 'Disallow changes to specified form fields',
        ),
    );

}
