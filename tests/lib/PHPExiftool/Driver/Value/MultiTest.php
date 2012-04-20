<?php

namespace PHPExiftool\Driver\Value;

class MultiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Multi
     */
    protected $object;

    /**
     * @covers PHPExiftool\Driver\Value\Multi::__construct
     */
    protected function setUp()
    {
        $this->object = new Multi(array('hello', 'world !'));
    }

    /**
     * @covers PHPExiftool\Driver\Value\Multi::getType
     */
    public function testGetType()
    {
        $this->assertEquals(Value::TYPE_MULTI, $this->object->getType());
    }

    /**
     * @covers PHPExiftool\Driver\Value\Multi::getValue
     */
    public function testGetValue()
    {
        $this->assertEquals(array('hello', 'world !'), $this->object->getValue());
    }

    /**
     * @covers PHPExiftool\Driver\Value\Multi::addValue
     */
    public function testAddValue()
    {
        $this->object->addValue('tim');
        $this->assertEquals(array('hello', 'world !', 'tim'), $this->object->getValue());
    }

    /**
     * @covers PHPExiftool\Driver\Value\Multi::reset
     */
    public function testReset()
    {
        $this->object->reset();
        $this->assertEquals(array(), $this->object->getValue());
    }

}
