<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // EVITAR QUE UN USUARIO INHABILITADO SE LOGUEE.
    public function redirectPath()
    {
        if (Auth::user()->status == "100") {
            return '/logout';
        }

        return '/';
    }

    //SOLICITUD DE USUARIO ACTIVO.
    protected function credenctials(Request $request)
    {
        $credenctials = $request->only($this->username(), 'password');
        
        $credenctials['is_active'] = true;
        
        return $credenctials;
        
    }
}
