<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Poster\Auth\LoginRequest;
use App\Services\Poster\Auth\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{

    // login view for user
    public function create()
    {
        return view('auth.login');
    }

    // login to site logic for user
    public function login(LoginRequest $request){
        if(Auth::check()){
            return redirect()->intended('index');
        }
        if (Auth::attempt($request->validated())) {
            Auth::user()->markOnline();
            return redirect()->intended('/');
        }
        return back()->withErrors('Incorrect email or password');
    }

    public function logout(){
        Auth::user()->markOffline();
        Auth::logout();
        return redirect()->route('login.form');
    }
}
