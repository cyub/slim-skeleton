<?php

return [
    'default' => [
        'driver'    => 'mysql',
        'host'      => getenv('DB_HOST'),
        'database'  => getenv('DATABASE'),
        'username'  => getenv('DB_USERNAME'),
        'password'  => getenv('DB_PASSWORD'),
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => getenv('DB_PREFIX'),
    ]
];