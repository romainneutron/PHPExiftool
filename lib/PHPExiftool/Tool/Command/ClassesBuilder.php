<?php

/**
 * Copyright (c) 2012 Romain Neutron
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 */

namespace PHPExiftool\Tool\Command;

/**
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
use \Symfony\Component\Console\Command\Command,
    \Symfony\Component\Console\Output\ConsoleOutput,
    \Symfony\Component\Console\Input\InputInterface,
    \Symfony\Component\Console\Input\OutputInterface,
    \PHPExiftool\ClassUtils\Builder,
    \PHPExiftool\Exiftool,
    \Symfony\Component\DomCrawler\Crawler;

class ClassesBuilder extends Command
{

  /**
   * Output interface for Command
   *
   * @var ConsoleOutput
   */
  protected $output;

  /**
   *
   * @var array
   */
  protected $classes = array();

  /**
   *
   * @var array
   */
  protected $types = array();

  /**
   * @see Console\Command\Command
   */
  protected function configure()
  {
    $this
      ->setName('classes-builder')
      ->setDescription('Build Tags classes from exiftool documentation.')
      ->addOption('write', 'w', null, 'Write classes on disk')
      ->addOption('force', 'f', null, 'Force classes write whenever files already exists');

    return $this;
  }

  /**
   * @see Console\Command\Command
   */
  protected function execute(InputInterface $input, ConsoleOutput $output)
  {
    $start = microtime(true);

    $this->output = $output;

    $this->output->write('Extracting datas... ');

    $dump = Exiftool::listDatas(Exiftool::LISTTYPE_SUPPORTED_XML);

    $this->output->writeln('Done !');

    $this->output->writeln('Generating classes... ');

    $this->extractDump($dump);

    if (!$input->getOption('write'))
    {
      $this->output->writeln(
        'These classes were not written. Use --write to write on disk'
      );
    }
    else
    {
      $this->output->writeln('Erasing previous files... ');

      system('rm -R ' . __DIR__ . '/../../Driver/Tag/*');
      system('rm -R ' . __DIR__ . '/../../Driver/Type/*');

      $this->output->writeln('Writing files... ');
      $this->writeClasses($input->getOption('force'));
    }

    $this->output->writeln(
      sprintf(
        '%d classes generated in %d seconds (%d Mb)'
        , count($this->classes), (microtime(true) - $start), memory_get_peak_usage() >> 20
      )
    );
  }

  /**
   *
   * @return \PHPExiftool\Tool\Command\ClassesBuilder
   */
  protected function writeClasses($force = false)
  {
    $n = 0;

    foreach ($this->classes as $class)
    {
      try
      {
        $class->write($force);
        $this->output->write(sprintf("\rwriting class #%5d", $n++));
      }
      catch (\Exception $e)
      {
        $this->output->writeln(
          sprintf("\n<error>Error while writing class %s</error>", $class->getPathfile())
        );
      }
    }

    $this->output->writeln('');

    return $this;
  }

  protected function generateTypes()
  {
    foreach ($this->types as $type => $data)
    {
      if ($type == '?')
        $type = 'unknown';

      $classname = self::generateClassname($type);

      $properties = array('ExiftoolName' => $data, 'PHPMap'       => $this->getTypeMap($type));

      $classpath = sprintf('%s', $classname);

      $this->classes[$classpath] = new Builder('Type', $classname, $properties);
    }

    return;
  }

  protected function getTypeMap($type)
  {
    switch ($type)
    {
      case 'Int16Data':
      case 'Int8uText':
      case 'Int8u2Text':
      case 'int64u':
      case 'var_int8u':
      case 'Int32uData':
      case 'rational64s':
      case 'fixed16s':
      case 'rational':
      case 'integer':
      case 'real':
      case 'int32s':
      case 'int16s':
      case 'int32u':
      case 'int16u':
      case 'var_int16u':
      case 'int8u':
      case 'int8s':
      case 'int16uRev':
      case 'rational32u':
      case 'rational64u':
      case 'rational32s':
      case 'fixed32u':
      case 'fixed32s':
      case 'digits':
      case 'double':
      case 'int64s':
      case 'unsigned':
        return 'int';
        break;
      case 'float':
        return 'float';
        break;
      case 'binary':
        return 'binary';
        break;
      case '?':
      case 'unknown':
      case 'extended':
      case 'Arc':
      case 'Polygon':
      case 'BitsRect#':
      case 'BitsRgn#':
      case 'DirectBitsRect':
      case 'DirectBitsRgn':
      case 'CompressedQuickTime':
      case 'lang-alt':
      case 'string':
      case 'var_string':
      case 'undef':
      case 'resize':
      case 'var_pstr32':
      case 'utf8':
      case 'signed':
      case 'null':
      case 'Rgn':
      case 'Point':
      case 'Rect':
      case 'PixPat':
      case 'Unknown':
      case 'RGBColor':
      case 'ShortLine':
      case 'PointText':
      case 'FontName':
      case 'pstring':
        return 'string';
        break;
      case 'date':
        return 'date';
        break;
      case 'boolean':
        return 'boolean';
        break;
      default:
        $this->output->writeln(sprintf("No type found for %s", $type));
        break;
    }

    return;
  }

  protected function createTagClass($namespace, $classname, array $properties)
  {
    if ($classname == 'Reserved')
    {
      return;
    }

    $namespace = self::generateNamespace('Tag\\' . $namespace);

    $classpath = sprintf('%s\\%s', $namespace, $classname);

    if (isset($this->classes[$classpath]))
    {
      foreach ($properties as $property => $value)
      {
        if ($this->classes[$classpath]->getProperty($property) != $value)
        {
          if($property === 'Writable')
          {
            $this->classes[$classpath]->setProperty($property, 'false');
          }
          elseif($property === 'Values')
          {
            $new_value = array();

            if(!is_array($this->classes[$classpath]->getProperty($property)))
            {
              if(is_array($value))
                $new_value = $value;
            }
            else
            {
              if(is_array($value) && $this->classes[$classpath]->getProperty($property) != $value)
                $new_value = array_merge($this->classes[$classpath]->getProperty($property), $value);
              else
                $new_value = $this->classes[$classpath]->getProperty($property);
            }


            $this->classes[$classpath]->setProperty($property, $new_value);
          }
          else
          {
            $this->classes[$classpath]->setProperty($property, 'mixed');
          }
        }
      }
    }
    else
    {
      $this->classes[$classpath] = new Builder($namespace, $classname, $properties, '\\PHPExiftool\\Driver\\Tag');
    }
    return;
  }

  protected function extractDump($dump)
  {

    $crawler = new Crawler();
    $crawler->addContent($dump);

    foreach ($crawler->filter('table') as $table)
    {
      $table_crawler = new Crawler();
      $table_crawler->addNode($table);

      $tag_group_name = $table_crawler->attr('g1');
      $tag_full_name  = $table_crawler->attr('name');

      $tag_g0 = $table_crawler->attr('g0');
      $tag_g2 = $table_crawler->attr('g2');

      $tags = $table_crawler->filter('tag');

      foreach ($tags as $tag)
      {

        $tag_crawler = new Crawler();
        $tag_crawler->addNode($tag);

        $extra = array();

        if ($tag_crawler->attr('g0'))
        {
          $extra['local_g0'] = $tag_crawler->attr('g0');
        }

        if ($tag_crawler->attr('g1') && !in_array($tag_crawler->attr('g1'), array('MakerNotes', 'Chapter#')))
        {
          $g_name            = $tag_crawler->attr('g1');
          $extra['local_g1'] = $tag_crawler->attr('g1');
        }
        else
        {
          $g_name = $tag_group_name;
        }

        if ($tag_crawler->attr('g2'))
        {
          $extra['local_g2'] = $tag_crawler->attr('g2');
        }

        $flags = explode(',', $tag_crawler->attr('flags'));


        if (in_array('Avoid', $flags))
        {
          $extra['flag_Avoid'] = 'true';
        }
        if (in_array('Binary', $flags))
        {
          $extra['flag_Binary'] = 'true';
        }
        if (in_array('Permanent', $flags))
        {
          $extra['flag_Permanent'] = 'true';
        }
        if (in_array('Protected', $flags))
        {
          $extra['flag_Protected'] = 'true';
        }
        if (in_array('Unsafe', $flags))
        {
          $extra['flag_Unsafe'] = 'true';
        }
        if (in_array('List', $flags))
        {
          $extra['flag_List'] = 'true';
        }
        if (in_array('Mandatory', $flags))
        {
          $extra['flag_Mandatory'] = 'true';
        }
        if (in_array('Bag', $flags))
        {
          $extra['flag_Bag'] = 'true';
        }
        if (in_array('Seq', $flags))
        {
          $extra['flag_Seq'] = 'true';
        }
        if (in_array('Alt', $flags))
        {
          $extra['flag_Alt'] = 'true';
        }

        $subspace = str_replace('::', '\\', $g_name);

        $tag_name = $tag_crawler->attr('name');

        $classname = self::generateClassname($tag_name);
        $tag_id    = $tag_crawler->attr('id');

        $properties = array_merge(array(
          'Id'          => $tag_id,
          'Name'        => $tag_name,
          'FullName'    => $tag_full_name,
          'GroupName'   => $g_name,
          'g0'          => $tag_g0,
          'g1'          => $tag_group_name,
          'g2'          => $tag_g2,
          'Type'        => $tag_crawler->attr('type'),
          'Writable'    => $tag_crawler->attr('writable'),
          'Description' => $tag_crawler->filter('desc[lang="en"]')->first()->text(),
          ), $extra);

        $this->types[$tag_crawler->attr('type')] = $tag_crawler->attr('type');

        if ($tag_crawler->attr('index'))
        {
          $properties['Index'] = $tag_crawler->attr('index');
        }

        if (count($tag_crawler->filter('values')) > 0)
        {
          $values = array();

          $values_tag = $tag_crawler->filter('values')->first();

          $Keys = $values_tag->filter('key');

          foreach ($Keys as $Key)
          {
            $KeyCrawler = new Crawler();
            $KeyCrawler->addNode($Key);

            $Id    = $KeyCrawler->attr('id');
            $Label = $KeyCrawler->filter('val[lang="en"]')->first()->text();

            $values[$Id] = array('Id'    => $Id, 'Label' => $Label);
          }

          $properties['Values'] = $values;
        }

        $this->createTagClass($subspace, $classname, $properties);
      }
    }

    $this->generateTypes();
  }

  protected static $reservedNames =
    array(
    'abstract', 'and', 'array', 'as', 'break', 'case'
    , 'catch', 'function', 'class', 'clone'
    , 'const', 'continue', 'declare', 'default', 'do'
    , 'else', 'elseif', 'enddeclare', 'endfor'
    , 'endforeach', 'endif', 'endswitch', 'endwhile', 'extends', 'final'
    , 'for', 'foreach', 'function', 'global', 'goto', 'if'
    , 'implements', 'interface'
    , 'instanceof', 'namespace', 'new', 'old_function'
    , 'or', 'private', 'protected', 'public', 'static'
    , 'switch', 'throw', 'try', 'use', 'var', 'while', 'xor'
  );

  /**
   *
   * @param type $name
   * @return type
   */
  public static function generateClassname($name)
  {
    $values = preg_split('/\\ |-|_|\\#/', ltrim($name, '0123456789'));

    foreach ($values as $key => $value)
    {

      $values[$key] = ucfirst($value);
    }

    $retval = implode('', $values);

    if (in_array(strtolower($retval), static::$reservedNames))
    {
      $retval = $retval . '0';
    }

    return $retval;
  }

  public static function generateNamespace($namespace)
  {
    $values = explode('\\', $namespace);

    foreach ($values as $key => $value)
    {
      $values[$key] = ucfirst(self::generateClassname($value));
    }

    return implode('\\', $values);
  }

}
