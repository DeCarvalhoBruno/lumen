<?php

require_once __DIR__ . '/../vendor/autoload.php';

(new Laravel\Lumen\Bootstrap\LoadEnvironmentVariables(
    dirname(__DIR__)
))->bootstrap();

//$app = new Laravel\Lumen\Application(
//    dirname(__DIR__)
//);

$app = new \App\Application(
    dirname(__DIR__)
);

// $app->withFacades();

// $app->withEloquent();

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->register(Naraki\Elasticsearch\LumenServiceProvider::class);
$app->register(Barryvdh\Cors\ServiceProvider::class);
$app->make('config')->set('cors', [
    'supportsCredentials' => false,
    'allowedOrigins' => explode(',',env('CORS_ALLOWED_ORIGINS')),
    'allowedOriginsPatterns' => [],
    'allowedHeaders' => ['*'],
    'allowedMethods' => ['POST'],
    'exposedHeaders' => [],
    'maxAge' => 0,
]);
$app->middleware([
    'cors' => \Barryvdh\Cors\HandleCors::class,
]);
// $app->register(App\Providers\AuthServiceProvider::class);
// $app->register(App\Providers\EventServiceProvider::class);

/*
|--------------------------------------------------------------------------
| Load The Application Routes
|--------------------------------------------------------------------------
|
| Next we will include the routes file so that they can all be added to
| the application. This will provide all of the URLs the application
| can respond to, as well as the controllers that may handle them.
|
*/
//
//$app->router->group([
//    'namespace' => 'App\Http\Controllers',
//], function ($router) {
//    require __DIR__.'/../routes/web.php';
//});

return $app;
