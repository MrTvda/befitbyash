<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckIfAdmin {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

       // Controlleren of gebruiker admin is
       if(Auth::user()->user_role == "Admin") {
         // Doorverwijzen naar gevraagde pagina
         return $next($request);
       }

       // Doorverwijzen naar user pagina / login pagina
       return redirect('/');
    }
}
