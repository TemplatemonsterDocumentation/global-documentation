<?php
/**
 * Autoload classes
 */
//set_include_path(__DIR__);
//spl_autoload_extensions(".php");
//spl_autoload_register();

function __autoload($class) {
    $filename = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class . '.php');
    include($filename);
}

new Core\Route();


