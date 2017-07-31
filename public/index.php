<?php

require __DIR__ . '/../vendor/autoload.php';

session_start();

// Instantiate the app
$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);

$container = $app->getContainer();
$container['application'] = function() use ($app) {
	return $app;
};
Tink\Common\ServiceProviders\Provider::setServiceProviderContainer($container);

// Register routes
require __DIR__ . '/../src/routes.php';

// Run app
$app->run();
