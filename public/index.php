<?php

$loader = require '../vendor/autoload.php';

$app = \Izaika\Framework\Application::getInstance(['key' => 'value']);

$app->run();