<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($this->checkSession()) {
            return $next($request);
        }

        return redirect(route('login'));
    }

    private function checkSession(){
        if (!session()->has('username')) {
            return false;
        }
        
        return true;
    }

}
