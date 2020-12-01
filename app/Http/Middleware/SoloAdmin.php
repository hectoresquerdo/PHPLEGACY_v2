<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;

class SoloAdmin
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
        switch(auth::user()->tipo){
            case ('1'):
                return $next($request);//si es admin redirige al home
            break;
            case ('2'):
                return redirect('teacher');
            break;
            case ('3'):
                return redirect('userDAM');
            break;
            case ('4'):
                return redirect('userDAW');
            break;
            default: null;
        }
    }
}
