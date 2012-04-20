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
 * Metadata Object for mapping a Tag to a value
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class TagFactory
{

    /**
     * Build a Tag based on his Tagname
     *
     * @param string $tagname
     * @return \PHPExiftool\Driver\Tag
     * @throws \PHPExiftool\Exception\TagUnknown
     */
    public static function getFromRDFTagname($tagname)
    {
        $classname = self::classnameFromTagname($tagname);

        if ( ! class_exists($classname))
        {
            throw new \PHPExiftool\Exception\TagUnknown(sprintf('Unknown tag %s', $tagname));
        }

        return new $classname;
    }

    public static function hasFromRDFTagname($tagname)
    {
        return class_exists(self::classnameFromTagname($tagname));
    }

    protected static function classnameFromTagname($tagname)
    {
        $classname = '\PHPExiftool\Driver\Tag\\' . str_replace(':', '\\', $tagname);

        return \PHPExiftool\Tool\Command\ClassesBuilder::generateNamespace($classname);
    }

}
