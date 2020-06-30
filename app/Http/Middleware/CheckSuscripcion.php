<?php

namespace App\Http\Middleware;

use Closure;

class CheckSuscripcion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $suscripcion)
    {
        if ($request->user()->suscripcion === $suscripcion) {
            //en caso de que pase la validación se le deja seguir
            return $next($request);
        }

        //en caso de no pasar la validación se devuelve un status 403 y el mensaje correspondiente
        abort(403, 'No tienes autorización para ingresar.');
    }
}
