<?php
use App\Api\Welcome;

$app->get('/', function ($request, $response, $args) {
	return $this->view->render($response, 'profile.html');
});
$app->get('/hello/{name}', Welcome::class . ':sayHello');
