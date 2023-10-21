<?php

namespace App\Http\Middleware;

use Closure;

class AdminOnly
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->email === 'admin.firoz@mail.com') {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
}
