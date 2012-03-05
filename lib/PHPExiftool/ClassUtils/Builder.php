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

namespace PHPExiftool\ClassUtils;

/**
 * Buil and write Tag classes
 * 
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class Builder
{

  protected $namespace;
  protected $classname;
  protected $properties;

  public function __construct($namespace, $classname, array $properties)
  {
    $this->namespace = '\\PHPExiftool\\Driver\\' . $namespace;
    $this->classname = $classname;
    $this->properties = $properties;

    return $this;
  }

  public function getProperty($property)
  {
    return isset($this->properties[$property]) ? $this->properties[$property] : null;
  }

  public function setProperty($property, $value)
  {
    $this->properties[$property] = $value;
  }
  
  public function getPathfile()
  {
    return  __DIR__ . '/../../'
      . str_replace('\\', '/', $this->namespace) . "/"
      . $this->classname . '.php';
  }

  public function write($force = false)
  {
    $content = "<?php\n\nnamespace <namespace>;\n\n";

    $content .= "class <classname>\n{\n";

    $content .= $this->generateClassProperties($this->properties);

    $content .= "\n}\n";

    $pathfile = $this->getPathfile();

    if (!is_dir(dirname($pathfile)))
    {
      mkdir(dirname($pathfile), 0754, true);
    }

    $content = str_replace(
      array('<namespace>', '<classname>', '<spaces>')
      , array($this->namespace, $this->classname, '    ')
      , $content
    );

    if (!$force && file_exists($pathfile))
      throw new \Exception(sprintf('%s already exists', $pathfile));
    
    file_put_contents($pathfile, $content);

    return $this;
  }

  protected function generateClassProperties(array $properties, $depth = 0)
  {
    $buffer = "";

    foreach ($properties as $key => $value)
    {
      if (is_array($value))
      {
        $val = "array(\n" . $this->generateClassProperties($value, $depth + 1);

        for ($i = 0; $i != $depth; $i++)
        {
          $val .= "<spaces>";
        }

        $val .= "<spaces>)";
      }
      else
      {
        $val = $this->quote($value);
      }
      if ($depth == 0)
      {
        $buffer .= "\n<spaces>protected \$$key = $val;\n";
      }
      else
      {
        for ($i = 0; $i != $depth; $i++)
        {
          $buffer .= "<spaces>";
        }
        $buffer .= "<spaces>" . $this->quote($key) . " => " . $val . ",\n";
      }
    }
    return $buffer;
  }

  protected function checkPHPVarName($var)
  {
    return preg_match('/^[a-zA-Z]+[a-zA-Z0-9]*$/', $var);
  }

  protected function quote($value)
  {

    if (ctype_digit(trim($value)))
    {
      return $value;
    }
    if (in_array(strtolower($value), array('true', 'false')))
    {
      return $value;
    }

    return "'" . str_replace('\'', '\\\'', $value) . "'";
  }

}