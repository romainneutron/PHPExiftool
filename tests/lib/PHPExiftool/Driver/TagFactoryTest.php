<?php

namespace PHPExiftool\Driver;

class TagFactoryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var TagFactory
     */
    protected $object;

    /**
     * @covers \PHPExiftool\Driver\TagFactory::GetFromRDFTagname
     */
    public function testGetFromRDFTagname()
    {
        $tag = TagFactory::getFromRDFTagname('IPTC:SupplementalCategories');
        $this->assertInstanceOf('\PHPExiftool\Driver\Tag\IPTC\SupplementalCategories', $tag);

        $tag = TagFactory::getFromRDFTagname('XMPExif:ApertureValue');
        $this->assertInstanceOf('\PHPExiftool\Driver\Tag\XMPExif\ApertureValue', $tag);

        try
        {
            $tag = TagFactory::getFromRDFTagname('XMPExif:AnunexistingTag');
            $this->fail('Should raise a TagUnknown exception');
        }
        catch (\PHPExiftool\Exception\TagUnknown $e)
        {

        }
    }

}
