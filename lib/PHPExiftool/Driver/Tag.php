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

namespace PHPExiftool\Driver;

/**
 * Abstract Tag object
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
abstract class Tag
{

  protected $Id;
  protected $Name;
  protected $Type;
  protected $Description;
  protected $Values;
  protected $FullName;
  protected $GroupName;
  protected $g0;
  protected $g1;
  protected $g2;
  protected $Writable       = false;
  protected $flag_Avoid     = false;
  protected $flag_Binary    = false;
  protected $flag_Permanent = false;
  protected $flag_Protected = false;
  protected $flag_Unsafe    = false;
  protected $flag_List      = false;
  protected $flag_Mandatory = false;
  protected $flag_Bag       = false;
  protected $flag_Seq       = false;
  protected $flag_Alt       = false;

  /**
   * Return Tag Id - Tag dependant
   *
   * @return string
   */
  public function getId()
  {
    return $this->Id;
  }

  /**
   * Return the tag name
   *
   * @return string
   */
  public function getName()
  {
    return $this->Name;
  }

  /**
   * A small string about the Tag
   *
   * @return string
   */
  public function getDescription()
  {
    return $this->Description;
  }

  /**
   * An array of available values for this tag
   * Other values should not be allowed
   *
   * @return array
   */
  public function getValues()
  {
    return $this->Values;
  }

  /**
   * Returns true if the Tag handles list values
   *
   * @return boolean
   */
  public function isMulti()
  {
    return $this->flag_List;
  }

  /**
   * Returns true if the value is binary
   *
   * @return type
   */
  public function isBinary()
  {
    return $this->flag_Binary;
  }

  /**
   * Returns tag group name
   *
   * @return string
   */
  public function getGroupName()
  {
    return $this->GroupName;
  }

  /**
   * Returns true if the value can be written in the tag
   *
   * @return type
   */
  public function isWritable()
  {
    return $this->Writable;
  }

  /**
   * Return the tagname path ; ie GroupName:Name
   *
   * @return type
   */
  public function getTagname()
  {
    return $this->GroupName . ':' . $this->Name;
  }

}
