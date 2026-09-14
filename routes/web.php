<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::Get('/', function () {
    return view('welcome');
});


Route::Get("/posts", [PostController::class, 'index'])->name('posts.index');

Route::Get("/posts/create", [PostController::class, 'create'])->name('posts.create');

Route::POST(
    "/posts",
    [PostController::class, function () {
        return "Store Post";
    }]
)->name('posts.store');

Route::Get("/posts/{post}", [PostController::class, 'show'])->name('posts.show');
