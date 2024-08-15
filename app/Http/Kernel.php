<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Global middleware
    ];

    protected $middlewareGroups = [
        'web' => [
            // Middleware untuk grup web
        ],

        'api' => [
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    protected $routeMiddleware = [
        // Middleware lainnya...
        'auth' => \App\Http\Middleware\AuthMiddleware::class,
    ];
}