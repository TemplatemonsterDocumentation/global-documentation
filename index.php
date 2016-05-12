<?php

ini_set('display_errors', 1);
define ('DS', DIRECTORY_SEPARATOR);
$sitePath = realpath(dirname(__FILE__));
define ('PATH', $sitePath);

require_once 'app/bootstrap.php';

