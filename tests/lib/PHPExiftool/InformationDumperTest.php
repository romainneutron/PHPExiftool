<?php

namespace PHPExiftool;

require_once dirname(__FILE__) . '/../../../lib/PHPExiftool/InformationDumper.php';

class InformationDumperTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var InformationDumper
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new InformationDumper;
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
