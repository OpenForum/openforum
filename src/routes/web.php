<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
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
    Route::get('/threads/{thread}', [$forum_controller, 'thread'])->name(' thread');
});

//Profile routing
Route::prefix('/profile')->group(function() {
    $profile_controller = ProfileController::class;
    //Here the user can edit his profile.
    Route::get('/', [$profile_controller, 'index'])->name('profile');
    //Saves the edited profile to the backand.
    Route::post('/profile/edit', [$profile_controller, 'edit'])->name('profile_edit');
});

//Members Routing
Route::prefix('/members')->group(function() {
    $members_controller = MembersController::class;
    Route::get('/', [$members_controller, 'index'])->name('members');
    Route::get('/{member}', [$members_controller, 'member'])->name('member');
});
