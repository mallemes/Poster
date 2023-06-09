<?php

namespace App\Http\Controllers;

use App\Http\Requests\Poster\Profile\UserPostsRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //for show user profile
    public function index($username){
        $user = User::where('username', $username)->firstOrFail();
        // if user is logged in
        if(Auth::check() and Auth::user()->username === $username) {
            return view('in_template.auth_user_profile', compact('user'));
        }
        // if user is not logged in
        return view('profiles.index', compact('user'));
    }

    //for create user post in profile
    public function createUserPost(UserPostsRequest $request){

        Auth::user()->posts()->create($request->validated());
        return redirect()->route('profile.index', Auth::user()->username);

    }

    public function edit($username){
        $user = User::where('username', $username)->firstOrFail();
        return view('profiles.edit', compact('user'));
    }

}
