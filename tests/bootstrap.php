<?php

error_reporting(E_ALL);

$file = __DIR__.'/../vendor/autoload.php';
$loader = file_exists($file) ? require $file : false;
if ( ! $loader)
{
	echo 'Autoloader not present, please make sure to run composer install.'.PHP_EOL;
	exit(1);
}

return $loader;
