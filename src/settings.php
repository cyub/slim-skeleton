<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        'providers' => [
            Tink\Common\ServiceProviders\DotenvServiceProvider::class,
            Tink\Common\ServiceProviders\ConfigureServiceProvider::class,
            Tink\Common\ServiceProviders\FacadeServiceProvider::class,
            Tink\Common\ServiceProviders\LoggerServiceProvider::class,
            Tink\Common\ServiceProviders\DBServiceProvider::class,
            Tink\Common\ServiceProviders\RedisServiceProvider::class,
            Tink\Common\ServiceProviders\CacheServiceProvider::class,
            Tink\Common\ServiceProviders\ValidatorServiceProvider::class,
            Tink\Common\ServiceProviders\TwigViewServiceProvider::class,
        ],

        'alias' => [
            'App'       => Tink\Common\Facades\App::class,
            'Input'     => Tink\Common\Facades\Input::class,
            'Log'       => Tink\Common\Facades\Log::class,
            'Cache'     => Tink\Common\Facades\Cache::class,
            'DB'        => Tink\Common\Facades\DB::class,
            'Config'    => Tink\Common\Facades\Config::class,
            'Validator' => Tink\Common\Facades\Validator::class,
        ]
    ],
];
