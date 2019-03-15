<?php namespace App;

use Laravel\Lumen\Application as LumenApplication;

class Application extends LumenApplication
{
    public $availableBindings = [
//        'auth' => 'registerAuthBindings',
//        'auth.driver' => 'registerAuthBindings',
//        'Illuminate\Auth\AuthManager' => 'registerAuthBindings',
//        'Illuminate\Contracts\Auth\Guard' => 'registerAuthBindings',
//        'Illuminate\Contracts\Auth\Access\Gate' => 'registerAuthBindings',
//        'Illuminate\Contracts\Broadcasting\Broadcaster' => 'registerBroadcastingBindings',
//        'Illuminate\Contracts\Broadcasting\Factory' => 'registerBroadcastingBindings',
        'Illuminate\Contracts\Bus\Dispatcher' => 'registerBusBindings',
//        'cache' => 'registerCacheBindings',
//        'cache.store' => 'registerCacheBindings',
//        'Illuminate\Contracts\Cache\Factory' => 'registerCacheBindings',
//        'Illuminate\Contracts\Cache\Repository' => 'registerCacheBindings',
        'composer' => 'registerComposerBindings',
        'config' => 'registerConfigBindings',
//        'db' => 'registerDatabaseBindings',
//        'Illuminate\Database\Eloquent\Factory' => 'registerDatabaseBindings',
        'filesystem' => 'registerFilesystemBindings',
        'Illuminate\Contracts\Filesystem\Factory' => 'registerFilesystemBindings',
//        'encrypter' => 'registerEncrypterBindings',
//        'Illuminate\Contracts\Encryption\Encrypter' => 'registerEncrypterBindings',
        'events' => 'registerEventBindings',
        'Illuminate\Contracts\Events\Dispatcher' => 'registerEventBindings',
        'files' => 'registerFilesBindings',
//        'hash' => 'registerHashBindings',
//        'Illuminate\Contracts\Hashing\Hasher' => 'registerHashBindings',
        'log' => 'registerLogBindings',
        'Psr\Log\LoggerInterface' => 'registerLogBindings',
//        'queue' => 'registerQueueBindings',
//        'queue.connection' => 'registerQueueBindings',
//        'Illuminate\Contracts\Queue\Factory' => 'registerQueueBindings',
//        'Illuminate\Contracts\Queue\Queue' => 'registerQueueBindings',
        'router' => 'registerRouterBindings',
        'Psr\Http\Message\ServerRequestInterface' => 'registerPsrRequestBindings',
        'Psr\Http\Message\ResponseInterface' => 'registerPsrResponseBindings',
//        'translator' => 'registerTranslationBindings',
        'url' => 'registerUrlGeneratorBindings',
//        'validator' => 'registerValidatorBindings',
//        'Illuminate\Contracts\Validation\Factory' => 'registerValidatorBindings',
//        'view' => 'registerViewBindings',
//        'Illuminate\Contracts\View\Factory' => 'registerViewBindings',
    ];

}