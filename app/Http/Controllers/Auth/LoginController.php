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
    protected $redirectTo = '/dashboard';
    // public function check($redirectTo)
    // {
    //     if (Auth::user()->is_admin == 0) {
    //         return  $this->$redirectTo = '/dashboard';
    //     } else {
    //         return $this->$redirectTo = '/home';
    //     }
    // }



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // if (Auth::user()->is_admin == 0) {
        //     return  $this->$redirectTo = '/dashboard';
        // } else {
        //     return $this->$redirectTo = '/home';
        // }
        $this->middleware('guest')->except('logout');
    }
}
