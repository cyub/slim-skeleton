<?php

require __DIR__ . '/../vendor/autoload.php';

session_start();

$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);

$container = $app->getContainer();
$container['application'] = function() use ($app) {
	return $app;
};
$container['basePath'] = realpath(__DIR__ . '/../');
Tink\Common\ServiceProviders\Provider::setServiceProviderContainer($container);

require __DIR__ . '/../src/routes.php';

// Run app
$app->run();
