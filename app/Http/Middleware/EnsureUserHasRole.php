<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        //si le role (admin) indique dans la route correspond, on exécute la requetes suivante
        //requete qui permet de récupérer les role si il existe et de passer à la prochaine requetes
        if ($request->user()->roles()->where('name', $role)->exists())  return $next($request);

        abort(403);

    }
}
