<?php
ini_set('display_errors', 1);
define ('DS', DIRECTORY_SEPARATOR);
$sitePath = realpath(dirname(__FILE__));
define ('PATH', $sitePath);
define ('PRODUCT_DIRNAME', 'products');
define ('PROJECT_DIRNAME', 'projects');
define ('SECTIONS_DIRNAME', 'sections');
define ('TEMPLATES_DIRNAME', 'templates');

require_once 'app/bootstrap.php';

