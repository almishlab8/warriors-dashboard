<?php

namespace App\Http\Controllers\Auth;
<<<<<<< HEAD
use Auth;
=======

>>>>>>> 5961acb534085936c3e453821cab3b301bbb71be
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
<<<<<<< HEAD
    
=======
>>>>>>> 5961acb534085936c3e453821cab3b301bbb71be
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
    protected $redirectTo = '/home';

<<<<<<< HEAD
    
=======
>>>>>>> 5961acb534085936c3e453821cab3b301bbb71be
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
