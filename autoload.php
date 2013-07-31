<?php

$dev = __DIR__ . '/vendor/';
$packaged = __DIR__ . '/../../';

foreach (array($packaged, $dev) as $location) {

    if (file_exists($location . 'autoload.php')) {
        require $location . 'autoload.php';
        break;
    }
}
