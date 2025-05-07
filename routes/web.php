<?php

use App\Models\Like;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/register', [HomeController::class, 'register'])->name('register-form');
Route::get('/login', [HomeController::class, 'login'])->name('login-form');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');


Route::middleware(['auth'])->group(function(){
    Route::get('/profile', [UserController::class, 'profile'])->name('profile'); 
    Route::get('editProfile', [UserController::class, 'edit'])->name('editProfile');
    Route::put('/edit/{user}', [UserController::class, 'update'])->name('updateProfile')->middleware('middleware');

    Route::get('/home', [PostController::class, 'home'])->name('home');
    Route::get('/you-post', [PostController::class, 'ownerPost'])->name('ownerPost')->middleware('auth');
    Route::get('/create',[PostController::class, 'create'])->name('create');
    Route::post('/store', [PostController::class, 'store'])->name('store')->middleware('auth');
    
    Route::get('/edit/{post}',[PostController::class, 'edit'])->name('edit')->middleware('post.owner');
    Route::put('/update/{post}',[PostController::class, 'update'])->name('update')->middleware('post.owner');
    Route::delete('/delete/{post}', [PostController::class, 'destroy'])->name('delete')->middleware('post.owner');

    Route::post('/posts/{post}/like', [LikeController::class, 'like'])->name('posts.like');
    Route::post('/posts/{post}/unlike', [LikeController::class, 'unlike'])->name('posts.unlike');
    Route::get('/liked-posts', [LikeController::class, 'showLikePost'])->name('likedPosts');
});


Route::get('/post/{post}',[PostController::class, 'show'])->name('show');






