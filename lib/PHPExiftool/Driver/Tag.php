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


    protected $flag_Avoid = false;

    protected $flag_Binary = false;

    protected $flag_Permanent = false;

    protected $flag_Protected = false;

    protected $flag_Unsafe = false;

    protected $flag_List = false;

    protected $flag_Mandatory = false;

    protected $flag_Bag = false;

    protected $flag_Seq = false;

    protected $flag_Alt = false;
    
  public function getId()
  {
    return $this->Id;
  }

  public function setId($Id)
  {
    $this->Id = $Id;
  }

  public function getName()
  {
    return $this->Name;
  }

  public function setName($Name)
  {
    $this->Name = $Name;
  }

  public function getType()
  {
    return $this->Type;
  }

  public function setType($Type)
  {
    $this->Type = $Type;
  }

  public function getDescription()
  {
    return $this->Description;
  }

  public function setDescription($Description)
  {
    $this->Description = $Description;
  }

  public function getValues()
  {
    return $this->Values;
  }

}
