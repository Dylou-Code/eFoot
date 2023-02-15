<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //si l'utilisateur est admin(récupère sur la colonne is_admin), return next request
        if ($request->user()->is_admin === 1) return $next($request);

        //code pour non accès à la page
        abort(403);

    }
}
