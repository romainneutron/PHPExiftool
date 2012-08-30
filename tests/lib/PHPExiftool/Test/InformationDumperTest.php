<?php

namespace PHPExiftool\Test;

use PHPExiftool\InformationDumper;
use PHPExiftool\Exiftool;

class InformationDumperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var InformationDumper
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new InformationDumper(new Exiftool());
    }

    /**
     * @covers PHPExiftool\InformationDumper::listDatas
     */
    public function testListDatas()
    {
        $this->object->listDatas();
    }

    /**
     * @covers PHPExiftool\InformationDumper::listDatas
     * @covers \PHPExiftool\Exception\InvalidArgumentException
     * @expectedException \PHPExiftool\Exception\InvalidArgumentException
     */
    public function testListDatasInvalidType()
    {
        $this->object->listDatas('Scrooge');
    }
}
