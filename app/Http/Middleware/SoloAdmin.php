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
            case('1'):
                return $next($request);//si es admin va a admin.index
            case('2'):
                return response()->view('teacherDAM.index');
            case('3'):
                return response()->view('teacherDAW.index');
            case('4'):
                return response()->view('userDAM.index');
            case('5'):
                return response()->view('userDAW.index');
        }


    }
}
