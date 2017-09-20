<?php

require __DIR__ . '/../vendor/autoload.php';
// the starter for manage slim application and boot something which the application need
$starter = new Tink\Common\Starter(__DIR__ . '/../'); 
$settings = require __DIR__ . '/../src/settings.php';
$starter->setApplication($app = new Slim\App($settings))
	->run();
