<?php
use App\Api\Welcome;

global $starter;
$app = $starter->getApplication();
$app->get('/hello/{name}', Welcome::class . ':sayHello');
