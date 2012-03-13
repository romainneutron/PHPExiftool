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

namespace PHPExiftool\Driver\Metadata;

/**
 * Metadata Object for mapping a Tag to a value
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class Metadata
{

  protected $tag;
  protected $value;

  public function __construct(\PHPExiftool\Driver\Tag $tag, $value, \SplFileInfo $file)
  {
    $this->tag = $tag;
    $this->value = $value;
    $this->file = $file;

    return $this;
  }

  public function reset()
  {
    $this->value = null;
  }

  public function getTag()
  {
    return $this->tag;
  }

  public function getValue()
  {
    if ($this->tag->isBinary())
    {
      /**
       * Read binary datas
       */
    }
    elseif(!is_null($this->value))
    {
      /**
       * Data have been read
       */
      return $this->value;
    }
    else
    {
      /**
       * Re-read datas
       */
    }
  }

}
