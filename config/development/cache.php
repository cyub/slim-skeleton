<?php

return [
    'default' => 'file',
    'prefix'  => '',

    'file'    => [
        'driver' => 'file',
        'path'   => __DIR__ . '/../../storage/cache/',
    ],

    'redis' => [
        'driver'  => 'redis',
        'host'    => '127.0.0.1',
        'port'    => 6379,
        'timeout' => 3,
        'auth'    => '',
    ],
];