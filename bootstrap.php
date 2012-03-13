<?php

require __DIR__ . '/vendor/.composer/autoload.php';

$loader = new \Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerNamespaces(
        array(
            'PHPExiftool'=> __DIR__ . '/lib/',
            )
        );
$loader->register();

