<?php

/*
 * This file is part of Phraseanet
 *
 * (c) 2005-2010 Alchemy
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool;

use \Symfony\Component\Process\Process;

/**
 * 
 * @package
 * @license     http://opensource.org/licenses/gpl-3.0 GPLv3
 * @link        www.phraseanet.com
 */
class Exiftool
{

  /**
   * For use with list option 
   */

  const LISTTYPE_WRITABLE          = 'w';
  /**
   * For use with list option 
   */
  const LISTTYPE_SUPPORTED_FILEEXT = 'f';
  /**
   * For use with list option 
   */
  const LISTTYPE_WRITABLE_FILEEXT  = 'wf';
  /**
   * For use with list option 
   */
  const LISTTYPE_SUPPORTED_XML     = 'x';
  /**
   * For use with list option 
   */
  const LISTTYPE_DELETABLE_GROUPS  = 'd';
  /**
   * For use with list option 
   */
  const LISTTYPE_GROUPS            = 'g';

  public static function listDatas($type = self::LISTTYPE_SUPPORTED_XML)
  {
    $available = array(
      self::LISTTYPE_WRITABLE, self::LISTTYPE_SUPPORTED_FILEEXT
      , self::LISTTYPE_WRITABLE_FILEEXT, self::LISTTYPE_SUPPORTED_XML
      , self::LISTTYPE_DELETABLE_GROUPS, self::LISTTYPE_GROUPS,
    );

    if (!in_array($type, $available))
      throw new \Exception('Unknown list attribute');

    $process = new Process(self::getBinary() . ' -list' . $type);
    $process->run();

    return $process->getOutput();
  }

  private static function getBinary()
  {
    return realpath(__DIR__ . '/../../vendor/Exiftool/exiftool');
  }

}