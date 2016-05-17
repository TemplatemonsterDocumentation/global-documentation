<?php
/**
 * Autoload classes
 * @TODO Move classes to subfolders
 */
spl_autoload_register(function ($class) {
    include 'core/' . $class . '.php';
});

new Route();


