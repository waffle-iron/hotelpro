<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Config;
use App;

class TraductorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->input('lang');
        $sessionLocale = Session::get('locale', Config::get('app.locale'));
        
        if ($locale) {

            if ($locale != $sessionLocale) {
                session(compact('locale'));
                setcookie('locale', $locale);
                App::setLocale($locale);
            }

        }  else {

            $locale = $sessionLocale;
            session(compact('locale'));
            setcookie('locale', $locale);
            App::setLocale($locale);

        }
        
        return $next($request);
    }
}

