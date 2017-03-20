<?php

function debug($value) {
	echo '<pre>';
	var_dump($value);
	echo '</pre>';
}


$loader = require '../vendor/autoload.php';
$routes = require '../config/routes.php';

$loader->addPsr4('Store\\', dirname(__FILE__).'/../src/');

$app = Izaika\Framework\Application::getInstance($routes);

$app->run();