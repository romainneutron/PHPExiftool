<?php

namespace PHPExiftool\Driver\Metadata;

require_once dirname(__FILE__) . '/../../../../../lib/PHPExiftool/Driver/Metadata/Metadata.php';

class TagTest extends \PHPExiftool\Driver\Tag
{

}

class MetadataTest extends \PHPUnit_Framework_TestCase
{

  /**
   * @var Metadata
   */
  protected $object;
  protected $tag;
  protected $value;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
    $this->tag = new TagTest();
    $this->value = 'valeur';
    $this->object = new Metadata(new TagTest, $this->value, new \SplFileInfo(__FILE__));
  }

  /**
   * @covers \PHPExiftool\Driver\Metadata\Metadata::reset
   */
  public function testReset()
  {
    $this->object->reset();
    $this->assertNull($this->object->getValue());
  }

  /**
   * @covers \PHPExiftool\Driver\Metadata\Metadata::getTag
   */
  public function testGetTag()
  {
    $this->assertEquals($this->object->getTag(), $this->tag);
  }

  /**
   * @covers \PHPExiftool\Driver\Metadata\Metadata::getValue
   */
  public function testGetValue()
  {
    $this->assertEquals($this->object->getValue(), $this->value);
  }

}
