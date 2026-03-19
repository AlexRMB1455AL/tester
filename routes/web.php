<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/home', function()
{
return view('home');
})->name('home');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');