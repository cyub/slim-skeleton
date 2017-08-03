<?php
use App\Api\Welcome;

$app->get('/hello/{name}', Welcome::class . ':sayHello');
