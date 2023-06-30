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
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() && $request->user()->rol === 'administrator' || $request->user() && $request->user()->rol === 'bo_medewerker') {
            return $next($request);
        }

        return redirect('/')->with('error', 'U heeft geen rechten tot het dashboard voor administrators.');
    }
}
