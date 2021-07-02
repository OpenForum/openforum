<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


$pages_controller = PagesController::class;
//Home page
Route::get('/', [$pages_controller, 'index'])->name('home');

$login_controller = LoginController::class;
Route::get('/signin', [$login_controller, 'index'])->name('signin');
Route::post('/login', [$login_controller, 'handle'])->name('login');

$register_controller = RegisterController::class;
Route::get('/signup', [$register_controller, 'index'])->name('signup');
Route::post('/register', [$register_controller, 'handle'])->name('register');


//Forum Routing
Route::prefix('/forum')->group(function() {
    $forum_controller = ForumController::class;
    Route::get('/', [$forum_controller, 'index'])->name('forum');
    Route::get('/{category}', [$forum_controller, 'category'])->name('category');
    Route::get('/threads/{thread}', [$forum_controller, 'thread'])->name(' thread');
});

//Profile routing
Route::prefix('/profile')->group(function() {
    $profile_controller = ProfileController::class;
    Route::get('/', [$profile_controller, 'index'])->name('profile');
    Route::get('/edit', [$profile_controller, 'edit'])->name('profile_edit');
    Route::post('/update', [$profile_controller, 'update'])->name('profile_update');
});

//Members Routing
Route::prefix('/members')->group(function() {
    $members_controller = MembersController::class;
    Route::get('/', [$members_controller, 'index'])->name('members');
    Route::get('/{member}', [$members_controller, 'member'])->name('member');
});
