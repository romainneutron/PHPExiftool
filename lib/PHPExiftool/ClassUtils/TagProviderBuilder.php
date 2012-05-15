<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\ClassUtils;

class TagProviderBuilder extends Builder
{

    public function generateContent()
    {
        $content = "<?php\n\n<license>\n\nnamespace <namespace>;\n\n";

        $content .= "class <classname>";

        if ($this->extends) {
            $content .= " extends <extends>";
        }

        $content .= "\n{\n";

        $content .= $this->generateClassProperties($this->properties);

        $content .= "\n<spaces>public function getAvailable()\n<spaces>{\n"
        ."<spaces><spaces>return \$this->available;\n<spaces>}\n";

        $content .= "\n}\n";

        if ( ! is_dir(dirname($this->getPathfile()))) {
            mkdir(dirname($this->getPathfile()), 0754, true);
        }

        $content = str_replace(
            array('<license>', '<namespace>', '<classname>', '<spaces>', '<extends>')
            , array($this->license, $this->namespace, $this->classname, '    ', $this->extends)
            , $content
        );

        return $content;
    }
}
