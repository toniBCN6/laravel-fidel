<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
 
    use AuthenticatesUsers;

    public function logout() 
    {
        Auth::logout();
        return redirect()->action('HomeController@getHome');
    }

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
