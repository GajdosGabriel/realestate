<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class LoadRelationsMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        Auth::user()->load(['roles', 'orders']);

        return $next($request);
    }
}
