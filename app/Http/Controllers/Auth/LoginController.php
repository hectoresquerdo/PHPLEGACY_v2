<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo(){
        if(auth::user()->tipo == '1'){
            return '/admin';
        }
        if(auth::user()->tipo == '2'){
            return '/teacherDAM';
        }
        if(auth::user()->tipo == '3'){
            return '/teacherDAW';
        }
        if(auth::user()->tipo == '4'){
            return '/userDAM';
        }
        if(auth::user()->tipo == '5'){
            return '/userDAW';
        }
        return '/home';
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
