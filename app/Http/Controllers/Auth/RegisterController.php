<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Poster\Auth\RegisterRequest;
use App\Services\Poster\Auth\AuthService;

class RegisterController extends Controller
{
    // register view for user
    public function create(){
        return view('auth.register');
    }

    // register to db logic for user
    public function register(RegisterRequest $request, AuthService $service)
    {
        $validatedData = $request->validated();
        $service->register($request->validated());
        return redirect()->route('index');
    }
}
