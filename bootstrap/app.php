<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias('auth', \App\Http\Middleware\Authenticate::class);
        $middleware->alias('auth.basic', \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class);
        $middleware->alias('bindings', \Illuminate\Routing\Middleware\SubstituteBindings::class);
        $middleware->alias('cache.headers', \Illuminate\Http\Middleware\SetCacheHeaders::class);
        $middleware->alias('can', \Illuminate\Auth\Middleware\Authorize::class);
        $middleware->alias('guest', \App\Http\Middleware\RedirectIfAuthenticated::class);
        $middleware->alias('signed', \Illuminate\Routing\Middleware\ValidateSignature::class);
        $middleware->alias('throttle', \Illuminate\Routing\Middleware\ThrottleRequests::class);
        $middleware->alias('verified', \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class);
        $middleware->alias('is_admin', \App\Http\Middleware\IsAdmin::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
