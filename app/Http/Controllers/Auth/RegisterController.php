<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Poster\Auth\RegisterRequest;
use App\Services\Poster\Auth\AuthService;

class RegisterController extends Controller
{
    // service logic
    private $service;
    public function __construct(AuthService $service)
    {
        $this->service =  $service;
    }
    // end service logic


    // register view for user
    public function create(){
        return view('in_template.register');
    }

    // register to db logic for user
    public function register(RegisterRequest $request)
    {
        $validatedData = $request->validated();
        $this->service->register($validatedData);
        return redirect()->route('index');
    }
}
