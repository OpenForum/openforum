<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


$pages_controller = PagesController::class;

//Home page
Route::get('/', [$pages_controller, 'index'])->name('home');

//Sign-in page
Route::get('/login', [$pages_controller, 'login'])->name('login');
Route::get('/register', [$pages_controller, 'register'])->name('register');

Route::post('/signin', [$pages_controller, 'signin'])->name('signin');
Route::post('/signup', [$pages_controller, 'signup'])->name('signup');

//Forum Routing
Route::prefix('/forum')->group(function() {
    $forum_controller = ForumController::class;
    Route::get('/', [$forum_controller, 'index'])->name('forum');
    Route::get('/{category}', [$forum_controller, 'category'])->name('category');
    Route::get('/{category}/{thread}', [$forum_controller, 'thread'])->name(' thread');
});
