<?php

function debug($value) {
	echo '<pre>';
	var_dump($value);
	echo '</pre>';
}

define('PUB_PATH', __DIR__.'/');
define('APP_PATH', dirname(__DIR__) . '/src/');

$loader = require '../vendor/autoload.php';
$routes = require '../config/routes.php';

$loader->addPsr4('Store\\', dirname(__FILE__).'/../src/');

$app = Izaika\Framework\Application::getInstance($routes);

$app->run();