<?php

namespace PHPExiftool;

class ExiftoolTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Exiftool
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new Exiftool;
    }

    /**
     * @covers \PHPExiftool\Exiftool::listDatas
     */
    public function testListDatas()
    {
        $this->object->listDatas();
    }

}
