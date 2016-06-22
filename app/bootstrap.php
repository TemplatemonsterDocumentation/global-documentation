<?php
/**
 * Autoload classes
 * @TODO Move classes to subfolders
 */
spl_autoload_register(function ($class) {
    include __NAMESPACE__ . $class . '.php';
});

new Core\Route();



