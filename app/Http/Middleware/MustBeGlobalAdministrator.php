<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response as StatusCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MustBeGlobalAdministrator
{

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()?->email == !'memad@gmail.com') {
            abort(Response::HTTP_FORBIDDEN
        );
        }
        return $response = $next($request);
    }
}
