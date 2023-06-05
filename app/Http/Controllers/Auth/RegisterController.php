<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required | string | max: 255',
            'surname' => 'string | max: 255',
            'username' => 'required | string | max: 255 |unique:users| regex:/^[a-zA-Z0-9_]+$/',
            'email' => 'required | email | max: 255 | unique:users',
            'password' => 'required | min: 6 | confirmed| regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'day' => 'required | integer | min: 1 | max: 31',
            'month' => 'required | integer | min: 1 | max: 12',
            'year' => 'required |integer |min: 1900 | max: 2021',
        ]);

        $day = $validated['day'];
        $month = $validated['month'];
        $year = $validated['year'];

        $birthdate = new DateTime("$year-$month-$day");

        $user = User::create([
            'firstname' => $validated['firstname'],
            'surname' => $validated['surname'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'birthday' => $birthdate,
        ]);
        Auth::login($user);
        Auth::user()->markOnline();
        return redirect()->route('index');
    }
}
