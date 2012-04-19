<?php

namespace PHPExiftool;

class ReaderTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Reader
     */
    protected $object;
    protected static $tmpDir;

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();

        $tmpDir = sys_get_temp_dir();

        self::$tmpDir = $tmpDir . '/exiftool_reader';

        if ( ! is_dir(self::$tmpDir))
        {
            mkdir(self::$tmpDir);
        }

        file_put_contents(self::$tmpDir . '/hello.world', 'Hello');
        file_put_contents(self::$tmpDir . '/hello.exiftool', 'Hello');

        if ( ! is_dir(self::$tmpDir . '/dir'))
        {
            mkdir(self::$tmpDir . '/dir');
        }

        $tmpDir2 = $tmpDir . '/exiftool_reader2';

        if ( ! is_dir($tmpDir2))
        {
            mkdir($tmpDir2);
        }

        file_put_contents($tmpDir2 . '/hello2.world', 'Hello');

        if ( ! is_link(self::$tmpDir . '/symlink'))
        {
            symlink($tmpDir2, self::$tmpDir . '/symlink');
        }

        file_put_contents(self::$tmpDir . '/dir/newfile.txt', 'Hello');
    }

    /**
     * @covers PHPExiftool\Reader::__construct
     */
    protected function setUp()
    {
        $this->object = new Reader();
    }

    /**
     * @covers PHPExiftool\Reader::getIterator
     */
    public function testGetIterator()
    {
        $file = self::$tmpDir . '/hello.exiftool';
        $this->assertInstanceOf('\\Iterator', $this->object->files($file)->getIterator());
    }

    /**
     * @covers PHPExiftool\Reader::files
     * @covers PHPExiftool\Reader::buildQuery
     */
    public function testFiles()
    {
        $file = self::$tmpDir . '/hello.exiftool';
        $this->object->files($file);

        $splfile = $this->object->files(self::$tmpDir . '/hello.exiftool')->first()->getFile();

        $this->assertEquals(realpath($file), $splfile->getPathname());
    }

    /**
     * @covers PHPExiftool\Reader::in
     * @covers PHPExiftool\Reader::buildQuery
     */
    public function testIn()
    {
        $reader = new Reader();
        $reader->in(self::$tmpDir)->extensions(array('world', 'exiftool', 'txt'));
        $this->assertEquals(3, count($reader->all()));

        $reader = new Reader();
        $reader->in(self::$tmpDir . '/dir')->extensions(array('world', 'exiftool', 'txt'));
        $this->assertEquals(1, count($reader->all()));
    }

    /**
     * @covers PHPExiftool\Reader::exclude
     * @covers PHPExiftool\Reader::normalizePathname
     * @covers PHPExiftool\Reader::buildQuery
     */
    public function testExclude()
    {
        $reader = new Reader();
        $reader
          ->in(self::$tmpDir)
          ->extensions(array('world', 'exiftool', 'txt'))
          ->exclude(self::$tmpDir . '/dir');

        $this->assertEquals(2, count($reader->all()));
    }

    /**
     * @covers PHPExiftool\Reader::extensions
     * @covers PHPExiftool\Reader::buildQuery
     * @covers PHPExiftool\Reader::buildQueryAndExecute
     */
    public function testExtensions()
    {
        $reader = new Reader();
        $reader->in(self::$tmpDir)->notRecursive()->extensions(array('world', 'exiftool'));
        $this->assertEquals(2, count($reader->all()));

        $reader = new Reader();
        $reader->in(self::$tmpDir)->extensions(array('world', 'exiftool'));
        $this->assertEquals(2, count($reader->all()));

        $reader = new Reader();
        $reader->in(self::$tmpDir)->extensions('world')->extensions('exiftool');
        $this->assertEquals(2, count($reader->all()));

        $reader = new Reader();
        $reader->in(self::$tmpDir)->extensions(array('world', 'exiftool'), false);
        $this->assertEquals(0, count($reader->all()));
    }

    /**
     * @covers PHPExiftool\Reader::extensions
     * @covers \PHPExiftool\Exception\LogicException
     * @expectedException \PHPExiftool\Exception\LogicException
     */
    public function testExtensionsMisUse()
    {
        $reader = new Reader();
        $reader->extensions('exiftool')->extensions('world', false);
    }

    /**
     * @covers PHPExiftool\Reader::followSymLinks
     */
    public function testFollowSymLinks()
    {
        $reader = new Reader();
        $reader->in(self::$tmpDir)
          ->extensions(array('world', 'exiftool', 'txt'))
          ->followSymLinks();

        $this->assertInstanceOf('\\Doctrine\\Common\\Collections\\ArrayCollection', $reader->all());
        $this->assertEquals(4, count($reader->all()));
    }

    /**
     * @covers PHPExiftool\Reader::notRecursive
     * @covers PHPExiftool\Reader::buildQuery
     */
    public function testNotRecursive()
    {
        $reader = new Reader();
        $reader->in(self::$tmpDir)->notRecursive()->extensions(array('world', 'exiftool', 'txt'));
        $this->assertEquals(2, count($reader->all()));
    }

    /**
     * @covers PHPExiftool\Reader::getOneOrNull
     */
    public function testGetOneOrNull()
    {
        $reader = new Reader();
        $reader->in(self::$tmpDir)->notRecursive()->extensions(array('world', 'exiftool'), false);

        $this->assertNull($reader->getOneOrNull());
    }

    /**
     * @covers PHPExiftool\Reader::first
     * @expectedException \PHPExiftool\Exception\EmptyCollectionException
     */
    public function testFirstEmpty()
    {
        $reader = new Reader();
        $reader->in(self::$tmpDir)->notRecursive()->extensions(array('world', 'exiftool'), false);
        $reader->first();
    }

    /**
     * @covers PHPExiftool\Reader::first
     */
    public function testFirst()
    {
        $reader = new Reader();
        $reader
          ->in(self::$tmpDir)
          ->extensions(array('world', 'exiftool', 'txt'));

        $this->assertInstanceOf('\\PHPExiftool\\FileEntity', $reader->first());
    }

    /**
     * @covers PHPExiftool\Reader::buildQuery
     * @expectedException \PHPExiftool\Exception\LogicException
     */
    public function testFail()
    {
        $reader = new Reader();
        $reader->all();
    }

    /**
     * @covers PHPExiftool\Reader::all
     * @covers PHPExiftool\Reader::buildQueryAndExecute
     */
    public function testAll()
    {
        $reader = new Reader();
        $reader->in(self::$tmpDir)->extensions(array('world', 'exiftool', 'txt'));

        $this->assertInstanceOf('\\Doctrine\\Common\\Collections\\ArrayCollection', $reader->all());
        $this->assertEquals(3, count($reader->all()));
    }

}
