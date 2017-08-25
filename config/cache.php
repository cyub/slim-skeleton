<?php

return [
    'default' => 'file',
    'prefix'  => '',

    'file'    => [
        'driver' => 'file',
        'path'   => __DIR__ . '/../storage/cache/',
    ],

    'redis' => [
        'driver'  => 'redis',
        'host'    => getenv('REDIS_HOST'),
        'port'    => getenv('REDIS_PORT'),
        'timeout' => 3,
        'auth'    => '',
    ],
];