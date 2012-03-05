<?php

require __DIR__ . '/vendor/Symfony/Component/ClassLoader/UniversalClassLoader.php';

$loader = new \Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerNamespaces(
        array(
            'Symfony'=> __DIR__ . '/lib/vendor/',
            'PHPExiftool'=> __DIR__ . '/lib/',
            )
        );
$loader->register();

