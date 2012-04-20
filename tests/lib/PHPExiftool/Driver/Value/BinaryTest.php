<?php

namespace PHPExiftool\Driver\Value;

require_once dirname(__FILE__) . '/../../../../../lib/PHPExiftool/Driver/Value/Binary.php';

class BinaryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Binary
     */
    protected $object;

    /**
     * @covers PHPExiftool\Driver\Value\Binary::__construct
     */
    protected function setUp()
    {
        $this->object = new Binary('Binary');
    }

    /**
     * @covers PHPExiftool\Driver\Value\Binary::getType
     */
    public function testGetType()
    {
        $this->assertEquals(Value::TYPE_BINARY, $this->object->getType());
    }

    /**
     * @covers PHPExiftool\Driver\Value\Binary::getValue
     */
    public function testGetValue()
    {
        $this->assertEquals('Binary', $this->object->getValue());
    }

    /**
     * @covers PHPExiftool\Driver\Value\Binary::getValueAsBase64
     */
    public function testGetValueAsBase64()
    {
        $this->assertEquals(base64_encode('Binary'), $this->object->getValueAsBase64());
    }

    /**
     * @covers PHPExiftool\Driver\Value\Binary::setValue
     */
    public function testSetValue()
    {
        $this->object->setValue('Daisy');
        $this->assertEquals('Daisy', $this->object->getValue());
    }

    /**
     * @covers PHPExiftool\Driver\Value\Binary::setBase64Value
     */
    public function testSetBase64Value()
    {
        $this->object->setBase64Value('UmlyaSBGaWZpIGV0IExvdWxvdQ==');
        $this->assertEquals('Riri Fifi et Loulou', $this->object->getValue());
    }

    /**
     * @covers PHPExiftool\Driver\Value\Binary::setBase64Value
     * @covers \PHPExiftool\Exception\InvalidArgumentException
     * @expectedException \PHPExiftool\Exception\InvalidArgumentException
     */
    public function testSetWrongBase64Value()
    {
        $this->object->setBase64Value('Riri Fifi et Loulou !');
    }

    /**
     * @covers PHPExiftool\Driver\Value\Binary::loadFromBase64
     */
    public function testLoadFromBase64()
    {
        $object = Binary::loadFromBase64('VW5jbGUgU2Nyb29nZQ==');
        $this->assertEquals('Uncle Scrooge', $object->getValue());
        $this->assertEquals('VW5jbGUgU2Nyb29nZQ==', $object->getValueAsBase64());
    }

    /**
     * @covers PHPExiftool\Driver\Value\Binary::loadFromBase64
     * @covers \PHPExiftool\Exception\InvalidArgumentException
     * @expectedException \PHPExiftool\Exception\InvalidArgumentException
     */
    public function testLoadFromWrongBase64()
    {
        $object = Binary::loadFromBase64('Uncle Scrooge !!!');
    }

}
