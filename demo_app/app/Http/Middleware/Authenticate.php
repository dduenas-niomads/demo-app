<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        // Si no es una petición JSON (como las de una API), lanza error 401
        if (! $request->expectsJson()) {
            abort(401, 'Unauthorized');
        }
    }
}
