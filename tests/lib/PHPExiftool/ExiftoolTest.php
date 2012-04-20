<?php

namespace PHPExiftool;

class ExiftoolTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers PHPExiftool\Exiftool::getBinary
     */
    public function testGetBinary()
    {
        $this->assertTrue(is_executable(ExiftoolTester::getBinaryTester()));
    }

    /**
     * @covers PHPExiftool\Exiftool::executeCommand
     */
    public function testExecuteCommand()
    {
        $command = ExiftoolTester::getBinaryTester() . ' -ver';

        $this->assertRegExp('/\d+\.\d+/', ExiftoolTester::executeCommandTester($command));
    }

    /**
     * @covers PHPExiftool\Exiftool::executeCommand
     * @covers \PHPExiftool\Exception\RuntimeException
     * @expectedException \PHPExiftool\Exception\RuntimeException
     */
    public function testExecuteCommandFailed()
    {
        $command = ExiftoolTester::getBinaryTester() . ' -version';
        ExiftoolTester::executeCommandTester($command);
    }

}

class ExiftoolTester extends Exiftool
{

    public static function getBinaryTester()
    {
        return self::getBinary();
    }

    public static function executeCommandTester($command)
    {
        return self::executeCommand($command);
    }

}

