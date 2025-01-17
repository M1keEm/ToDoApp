<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * * @param Closure $next
     * * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->is_admin == 1) {
            return $next($request);
        }

        return redirect('home')->with('error', "You don't have admin access.");
    }
}
