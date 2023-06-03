<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProfileController;

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

// for users
Route::prefix('profile')->group(function (){
    Route::middleware('auth')->group(function () {
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/', [ProfileController::class, 'update'])->name('profile.update');
    });

    Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
});
