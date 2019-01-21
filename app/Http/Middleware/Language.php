<?php

namespace App\Http\Middleware;

use Closure;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)//es el metodo que se ejecuta por defecto
    {
        if(session('applocale')){//si existe una sesion
            $configLanguage= config('languages')[session('applocale')];
            setlocale(LC_TIME, $configLanguage[1].',utf8');
            Carbon::setLocale(session('applocale'));
            App::setLocale(session(session('applocale')));
        }
        else{
            session()->put('applocale', config('app.fallback_locale'));
            setlocale(LC_TIME, 'es_ES.utf8');
            Carbon::setLocale(session('applocale'));
            App::setLocale(config('app.fallback_locale'));
        }
        return $next($request);
    }
}
