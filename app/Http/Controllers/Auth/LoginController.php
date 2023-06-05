<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function login(Request $request){
        if(Auth::check()){
            return redirect()->intended('index');
        }
        $validated = $request->validate([
            'username' => 'required |exists:users,username',
            'password' => 'required'
        ]);

        if(Auth::attempt($validated)){
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
