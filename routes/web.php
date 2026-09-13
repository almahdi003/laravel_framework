<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::Get('/', function () {
    return view('welcome');
});


Route::Get("/posts", [PostController::class, 'index']);
