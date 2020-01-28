<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class UserAccountantMiddleware
{

    public function handle($request, Closure $next)
    {
        if (auth()->user()->role == User::USER_ROLE_ACCOUNTANT) {
            return redirect(adminUrl('logout'));
        } else {
            return $next($request);
        }
    }
}
