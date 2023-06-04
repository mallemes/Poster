<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index($username)
    {
        $user = User::where('username', $username)->firstOrFail();

        if (!Auth::check()) {
            return view('profiles.index', compact('user'));
        }

        return view('profiles.auth_user', compact('user'));
    }
}
