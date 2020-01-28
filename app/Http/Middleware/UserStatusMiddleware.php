<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class UserStatusMiddleware
{

    public function handle($request, Closure $next)
    {
        if (auth()->user()->active == User::USER_NOT_ACTIVE) {
            return redirect(adminUrl('logout'));
        } else {
            return $next($request);
        }
    }
}
