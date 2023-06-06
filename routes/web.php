<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/home', [IndexController::class, 'index'])->name('index');

Route::get('/', function () {
    return redirect()->route('index');
});

// for posts
Route::prefix('posts')->group(function (){
    Route::middleware('auth')->group(function () {
        Route::get('/create', [PostController::class, 'create'])->name('posts.create');
        Route::post('/', [PostController::class, 'store'])->name('posts.store');
        Route::get('/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
        Route::put('/{post}', [PostController::class, 'update'])->name('posts.update');
        Route::delete('/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    });

    Route::get('/', [PostController::class, 'index'])->name('posts.index');
});

// for groups
Route::prefix('groups')->group(function (){
    Route::middleware('auth')->group(function () {
        Route::get('/create', [GroupController::class, 'create'])->name('groups.create');
        Route::post('/', [GroupController::class, 'store'])->name('groups.store');
        Route::get('/{group}/edit', [GroupController::class, 'edit'])->name('groups.edit');
        Route::put('/{group}', [GroupController::class, 'update'])->name('groups.update');
        Route::delete('/{group}', [GroupController::class, 'destroy'])->name('groups.destroy');
    });

    Route::get('/', [GroupController::class, 'index'])->name('groups.index');
});

// for users profile or profiles
Route::prefix('profile')->group(function (){
    Route::middleware('auth')->group(function () {
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::post('/create/post', [ProfileController::class, 'createUserPost'])->name('profile.create.post');
    });
    Route::get('/{username}', [ProfileController::class, 'index'])->name('profile.index');
});

// for logout
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});


// for login and register
Route::get('/register', [RegisterController::class, 'create'])->name('register.form');
Route::get('/login', [LoginController::class, 'create'])->name('login.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');


Route::get('/test', function () {
    return view('in_template.auth_user_profile');
});
