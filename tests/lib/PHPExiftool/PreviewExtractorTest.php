<?php

namespace PHPExiftool;

class PreviewExtractorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers PHPExiftool\PreviewExtractor::extract
     */
    public function testExtract()
    {
        $extractor = new PreviewExtractor(new Exiftool());

        $tmpDir = sys_get_temp_dir() . '/tests' . mt_rand(10000, 99999);

        mkdir($tmpDir);

        $files = $extractor->extract(__DIR__ . '/../../files/ExifTool.jpg', $tmpDir);

        $this->assertInstanceOf('\\DirectoryIterator', $files);

        $n = 0;
        $unlinks = array();

        foreach ($files as $file) {
            if ($file->isDot() || $file->isDir()) {
                continue;
            }

            $unlinks[] = $file->getPathname();
            $n ++;
        }

        foreach ($unlinks as $u) {
            unlink($u);
        }

        $this->assertEquals(1, $n);
    }

    /**
     * @expectedException \PHPExiftool\Exception\LogicException
     */
    public function testExtractWrongFile()
    {
        $extractor = new PreviewExtractor(new Exiftool());

        $tmpDir = sys_get_temp_dir() . '/tests' . mt_rand(10000, 99999);

        $extractor->extract(__DIR__ . '/ExifTool.jpg', $tmpDir);
    }

    /**
     * @expectedException \PHPExiftool\Exception\LogicException
     */
    public function testExtractWrongDir()
    {
        $extractor = new PreviewExtractor(new Exiftool());

        $tmpDir = sys_get_temp_dir() . '/tests' . mt_rand(10000, 99999);

        $extractor->extract(__DIR__ . '/../../files/ExifTool.jpg', $tmpDir);
    }
}
