<?php

namespace PHPExiftool\Driver\Tag\IPTC;

class ActionAdvised extends \PHPExiftool\Driver\Tag
{

    protected $Id = 42;

    protected $Name = 'ActionAdvised';

    protected $FullName = 'IPTC::ApplicationRecord';

    protected $GroupName = 'IPTC';

    protected $g0 = 'IPTC';

    protected $g1 = 'IPTC';

    protected $g2 = 'Other';

    protected $Type = 'digits';

    protected $Writable = true;

    protected $Description = 'Action Advised';

    protected $Values = array(
        01 => array(
            'Id' => 01,
            'Label' => 'Object Kill',
        ),
        02 => array(
            'Id' => 02,
            'Label' => 'Object Replace',
        ),
        03 => array(
            'Id' => 03,
            'Label' => 'Ojbect Append',
        ),
        04 => array(
            'Id' => 04,
            'Label' => 'Object Reference',
        ),
        '' => array(
            'Id' => '',
            'Label' => '',
        ),
    );

}
